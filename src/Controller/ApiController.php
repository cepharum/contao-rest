<?php
/**
 * (c) 2018 cepharum GmbH, Berlin, http://cepharum.de
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2018 cepharum GmbH
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE
 * SOFTWARE.
 *
 * @author: cepharum
 */

namespace App\Controller;


use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Expr\Expression;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Psr\Log\LoggerInterface;

/**
 * Class ApiController
 *
 * This controller is common base for implement REST API endpoints for accessing
 * a customizable entity. It implements common actions for
 *
 * - listing items of entity
 * - creating new item of entity
 * - reading properties of item of entity
 * - updating properties of item of entity
 * - removing item of entity
 *
 * This class relies on helpers mapping properties of entity to/from properties
 * transmitted as part of incoming requests and outgoing responses.
 *
 * It integrates with Symfony's authorization system using Voters.
 *
 * It includes handling certain CORS issues by recognizing requests with HTTP
 * method emitted by browsers prior to actual request asking for information on
 * allowed aspects of actually desired request in a CORS-aware setup.
 *
 * This controller is abstract due to requiring selection of entity to be
 * managed. All actions in abstract class declare simple routes to be associated
 * with. Any inheriting class is expected to declare common prefix for all these
 * actions to distinguish requests regarding one derived class from requests
 * regarding any other derived class.
 *
 * @package App\Controller
 */
abstract class ApiController extends AbstractController {
	protected $parameters;

	/**
	 * @var LoggerInterface
	 */
	protected $logger;

	/**
	 * Selects mapper instance for use with current controller instance.
	 *
	 * @var \App\Mapper\AbstractMapper
	 */
	protected $mapper;

	public function __construct( ParameterBagInterface $parameters, LoggerInterface $logger ) {
		$this->parameters = $parameters;
		$this->logger = $logger;
	}

	/**
	 * Revises expression used in fetching filtered list of entity's items.
	 *
	 * @param string $name name of property to be filtered
	 * @param string $operator operator for testing property for matching items
	 * @param string $value value to be used in operation for detecting matching items
	 * @return Expression processed expression
	 */
	protected function compileExpression( string $name, string $operator, $value ) {
		$expressionBuilder = Criteria::expr();

		switch ( $operator ) {
			case 'neq' :
			case 'gt' :
			case 'gte' :
			case 'lt' :
			case 'lte' :
			case 'startsWith' :
			case 'endsWith' :
			case 'contains' :
				return call_user_func( array( $expressionBuilder, $operator ), $name, $value );

			case 'eq' :
			default :
				return $expressionBuilder->eq( $name, $value );
		}
	}

	/**
	 * Method queryDatabaseWithCriterias()
	 *
	 * This function can be used to get a filtered set of records out of the database table
	 * connected to the current controller. The result contains the records which match
	 * all given criterias.
	 *
	 * @param array $criteriaArray		Array of criteria-triples [<field-name>, <operator>, <value>],
	 *										e.g. [ [ 'city', 'eq', 'Berlin' ], [ 'country', 'eq', 'Germany' ] ]
	 *									If only one criteria-triple is needed,
	 *										it may be directly given as parameter,
	 *										e.g. [ 'id', 'eq', '79' ]
	 * @param string $requestMethod		This string will be used together with $this->checkAccess()
	 *										to determine if the current user is allowed to access
	 *										the queried data.
	 * @param null|array $urlData		If an array is given here, the data will be used as additional filters.
	 *									It's expected to have the same form like in listAction(),
	 *										i.e. generated by $this->getDataFromUrl( $request->query, 'list' );
	 *									E.g. [ 'city' => 'Berlin', 'salary' => '$gt:5000' ]
	 * @param null|integer $offset		If this value is set
	 *										the first found records of the result will be skipped;
	 *									Set to null if you don't want records to be skipped.
	 * @param null|integer $limit		If this value is set
	 *										the result will be reduced to maximal $limit found records;
	 *									Set to null, if you want all records to be returned.
	 *
	 * @return Response			The routine delivers a JSON-response
	 *								either with the requested data or with an appropriate error-message.
	 * @throws Exception		If one of the arguments can't be processed, an exception is thrown.
	 */
	protected function queryDatabaseWithCriterias( $criteriaArray = [], $requestMethod = "GET", $urlData = [], $offset = null, $limit = null ) {

		$class = $this->mapper->getEntityClass();

		// Ensure that parameters are valid:
		if ( $requestMethod !== null && !is_string( $requestMethod ) ) {
			throw \Exception('queryDatabaseWithCriteria(): invalid parameter');
		}
		if ( !is_array( $criteriaArray ) ) {
			throw \Exception('queryDatabaseWithCriteria(): invalid parameter');
		}
		if ( count( $criteriaArray ) > 0 && is_string( $criteriaArray[0] ) ) {
			$criteriaArray = [ $criteriaArray ];
		}
		foreach ( $criteriaArray as $criteria ) {
			if ( !is_array( $criteria ) ||
						( count( $criteria ) != 3 && ( $criteria[1] != 'isNull' || count( $criteria ) != 2 ) ) ||
						!is_string( $criteria[0] ) || !is_string( $criteria[1] ) ) {
				throw \Exception('queryDatabaseWithCriteria(): invalid parameter');
			}
		}
		if ( $limit !== null && !is_numeric( $limit ) ) {
			throw \Exception('queryDatabaseWithCriteria(): invalid parameter');
		}

		// Ensure that current user may list records:
		$response = $this->checkAccess( $requestMethod === 'OPTIONS' ? 'GET' : null, ( $limit == 1 ) ? 'api:get' : 'api:list', [ 'class' => $class ] );
		if ( $response ) {
			return $response;
		}

		// Process the given filters from $criteriaArray and $urlData:
		$expression = null;
		$exprBuilder = Criteria::expr();
		try {
			if ( is_array( $urlData ) ) {
				foreach ( $urlData as $name => $value ) {
					if ( preg_match( '/^\$(?:([^:]+):)?(.+)$/', $value, $match ) ) {
						$criteriaArray[] = [ $name, $match[1], $match[2] ];
					} else {
						$criteriaArray[] = [ $name, 'eq', $value ];
					}
				}
			}
			foreach ( $criteriaArray as $criteria ) {
				$nextExpr = null;
				if ( array_search( $criteria[1], [ 'eq', 'gt', 'lt', 'gte', 'lte', 'neq', 'contains', 'startsWith', 'endWith' ] ) !== false && is_string( $criteria[2] ) ) {
					$nextExpr = call_user_func( [ $exprBuilder, $criteria[1] ], $criteria[0], $criteria[2] );
				}
				else if ( $criteria[1] == 'isNull' ) {
					$nextExpr = $exprBuilder->isNull( $criteria[0] );
				}
				else if ( array_search( $criteria[1], [ 'in', 'notin', 'memberOf' ] ) !== false && is_array( $criteria[2] ) ) {
					$nextExpr = call_user_func( [ $exprBuilder, $criteria[1] ], $criteria[0], $criteria[2] );
				}
				else {
					throw \Exception("queryDatabaseWithCriteria(): unknown comparison {$criteria[1]}");
				}
				$expression = ($expression == null) ? $nextExpr : $exprBuilder->andX( $expression, $nextExpr );
			}
		}
		catch ( \Exception $err ) {
			return $this->json(
				[ 'error' => 'error while composing database-query: ' . $err->getMessage() ],
				404,
				$this->qualifyHeaders( [ 'content-type' => 'application/json' ] )
			);
		}
		$criteria = $this->processCriterion( new Criteria( $expression ) );

		// Query the database:
		$repo = $this->getDoctrine()->getRepository( $class );
		$matches = $repo->matching( $criteria );
		$count = $matches->count();
		if ( $offset > 0 || $limit > 0 ) {
			if ( $offset > 0 ) {
				$criteria->setFirstResult( $offset );
			}
			if ( $limit > 0 ) {
				$criteria->setMaxResults( $limit );
			}
			$matches = $repo->matching( $criteria );
		}
		$matches = $repo->matching( $criteria );
		$mapper = $this->mapper;
		$items = array_map( function( $item ) use ( $mapper ) {
			return $mapper->toSerializable( $item, 'list' );
		}, $matches->toArray() );

		return $this->json(
			[ 'items' => $items, 'count' => $count ],
			200,
			$this->qualifyHeaders( [ 'content-type' => 'application/json' ] )
		);
	}

	/**
	 * Revises filter used with fetching list of entity's items.
	 *
	 * @param Criteria $criterion criterion to be processed
	 * @return Criteria processed criterion
	 */
	protected function processCriterion( Criteria $criterion ) {
		return $criterion;
	}

	/**
	 * Detects if service is currently running in development environment or
	 * not.
	 *
	 * @return bool true if service is running in development environment
	 */
	protected function isDevelopmentEnvironment() {
		switch ( $this->parameters->get( 'kernel.environment' ) ) {
			case 'dev' :
			case 'test' :
				return true;
		}

		return false;
	}

	/**
	 * Checks if provided item is valid or not.
	 *
	 * This method is supported to perform validations on a whole item rather
	 * than validating values assigned to sole property instead.
	 *
	 * @param object $item item to be validated
	 * @throws \Exception on failed validation
	 */
	protected function validate( $item ) {
	}

	/**
	 * Adjusts response headers according to current environment.
	 *
	 * @param array $headers headers to be qualified
	 * @param string $corsHeaders comma-separated list of request header field names to promote in actual requests
	 * @return array qualified headers
	 */
	protected function qualifyHeaders( $headers = [], $corsHeaders = null ) {
		if ( $this->isDevelopmentEnvironment() ) {
			$headers['Access-Control-Allow-Origin'] = '*';

			if ( $corsHeaders ) {
				$headers['Access-Control-Allow-Headers'] = $corsHeaders;
			}
		}

		return $headers;
	}

	/**
	 * @return TokenInterface
	 */
	public function getToken() {
		return $this->get( 'security.token_storage' )->getToken();
	}

	/**
	 * Fetches repository of selected entity's items in database.
	 *
	 * @param string|\ReflectionClass $entityClass class of entity to get repository for
	 * @return \Doctrine\Common\Persistence\ObjectRepository
	 */
	public function getEntityRepository( $entityClass ) {
		return $this->getDoctrine()->getRepository( $entityClass );
	}

	/**
	 * Extracts properties of entity from query included with current request's
	 * URL.
	 *
	 * @param ParameterBag $query parsed query of current request
	 * @param string $contextAction name of action this extraction is used with
	 * @return array extracted properties as regular associative array
	 */
	protected function getDataFromUrl( ParameterBag $query, $contextAction ) {
		$map = $this->mapper->getPropertyMap( $contextAction );

		$data = [];
		foreach ( $map as $record ) {
			list( $name ) = $record;

			if ( $query->has( $name ) ) {
				$data[$name] = $query->get( $name );
			}
		}

		return $data;
	}

	/**
	 * This action handles GET requests at base URL of current controller for
	 * listing items of current entity.
	 *
	 * Any request might include additional URL query parameters to customize
	 * listed items:
	 *
	 * - `_sort=propName` requests to sort resulting list of items by selected
	 *   property.
	 * - `_rev=1` requests to sort resulting list of items in reverse order.
	 * - `_offset=x` requests to omit first x items in resulting list of items.
	 * - `_limit=x` requests to deliver at most x items.
	 * - `<name>=<value>` may be used as a pattern for any property of exposed
	 *   entity to request listing items with given value in named property,
	 *   only. In addition, the `<value>` may be prefixed with a dollar sign,
	 *   an operator's name and a colon to request certain comparison operator
	 *   obeyed on looking for matching items. Supported operation are:
	 *   - `eq` or `$eq:` for equality matching
	 *   - `neq` or `$neq:` for inequality matching
	 *   - `gt` or `$gt:` to get items with value of property _greater than_
	 *     provided one
	 *   - `gte` or `$gte:` to get items with value of property _greater than or
	 *     equal_ provided one
	 *   - `lt` or `$lt:` to get items with value of property _less than_
	 *     provided one
	 *   - `lte` or `$lte:` to get items with value of property _less than or
	 *     equal_ provided one
	 *   - `startsWith` or `$startsWith:` to get items with value of property
	 *     _starting with_ provided one
	 *   - `endsWith` or `$endsWith:` to get items with value of property
	 *     _ending with_ provided one
	 *   - `contains` or `$contains:` to get items with value of property
	 *     _containing_ provided one
	 *
	 * @Route("", methods={"GET", "OPTIONS"})
	 * @Route("/", methods={"GET", "OPTIONS"})
	 *
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function listAction( Request $request ) {
		$class = $this->mapper->getEntityClass();

		$response = $this->checkAccess( $request->getMethod() === 'OPTIONS' ? 'GET' : null, 'api:list', [
			'class' => $class,
		] );

		if ( $response ) {
			return $response;
		}


		$query = $request->query;

		$sort    = $query->get( '_sort' );
		$reverse = $query->get( '_rev', false );
		$offset  = $query->get( '_offset', 0 );
		$limit   = $query->get( '_limit', 0 );

		$criteria = Criteria::create();

		if ( $sort ) {
			$criteria->orderBy( [ $sort => ( $reverse ? Criteria::DESC : Criteria::ASC ) ] );
		}

		$data = $this->getDataFromUrl( $query, 'list' );
		foreach ( $data as $name => $value ) {
			if ( preg_match( '/^\$(?:([^:]+):)?(.+)$/', $value, $match ) ) {
				$operator = $match[1];
				$value = $match[2];
			} else {
				$operator = 'eq';
			}

			$criteria->andWhere( $this->compileExpression( $name, $operator, $value ) );
		}

		$criteria = $this->processCriterion( $criteria );

		$repo    = $this->getDoctrine()->getRepository( $class );
		$matches = $repo->matching( $criteria );
		$count   = $matches->count();

		if ( $offset > 0 || $limit > 0 ) {
			if ( $offset > 0 ) {
				$criteria->setFirstResult( $offset );
			}

			if ( $limit > 0 ) {
				$criteria->setMaxResults( $limit );
			}

			$matches = $repo->matching( $criteria );
		}

		$mapper = $this->mapper;
		$items = array_map( function( $item ) use ( $mapper ) {
			return $mapper->toSerializable( $item, 'list' );
		}, $matches->toArray() );

		return $this->json( [
			'items' => $items,
			'count' => $count,
		], 200, $this->qualifyHeaders( [
			'content-type' => 'application/json',
		] ) );
	}

	/**
	 * Handles requests for creating new item of managed entity expecting all
	 * initially available properties of new item as JSON object in request's
	 * body.
	 *
	 * @Route("", methods={"POST", "OPTIONS"})
	 *
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function newAction( Request $request ) {
		$class = $this->mapper->getEntityClass();
		$item  = new $class();

		$response = $this->checkAccess( $request->getMethod() === 'OPTIONS' ? 'POST' : null, 'api:create', [
			'class' => $class,
			'item' => $item,
		] );
		if ( $response ) {
			return $response;
		}


		$data = json_decode( $request->getContent(), true );
		if ( !$data ) {
			return $this->json( [
				'error' => 'missing or invalid data',
			], 400, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		try {
			$this->mapper->fromSerializable( $data, $item, 'create' );
			$this->validate( $item );
		}
		catch ( \Exception $error ) {
			$this->logger->error( 'validating provided data failed: ' . $error->getMessage() );
			return $this->json( [
				'error' => 'validating provided data failed: ' . $error->getMessage(),
			], 422 );
		}

		try {
			$orm = $this->getDoctrine()->getManager();
			$orm->persist( $item );
			$orm->flush();
		}
		catch ( \Exception $error ) {
			$this->logger->error( 'writing data to database failed: ' . $error->getMessage() );
			return $this->json( [
				'error' => 'writing data to database failed: ' . $error->getMessage(),
			], 400 );
		}

		return $this->json( [
			'success' => true,
			'id'      => $item->getId(),
		], 200, $this->qualifyHeaders( [
			'content-type' => 'application/json',
		] ) );
	}

	/**
	 * Handles requests for creating new item of managed entity expecting all
	 * initially available properties of new item in URL query parameters.
	 *
	 * This method is available for conveniently requesting this action using
	 * regular browser in development environment. It isn't available in
	 * production environment.
	 *
	 * @Route("/new", methods={"GET", "OPTIONS"})
	 * @Route("/create", methods={"GET", "OPTIONS"})
	 *
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function newGetAction( Request $request ) {
		if ( !$this->isDevelopmentEnvironment() ) {
			return $this->json( [
				'error' => 'GET variant of endpoint not available in production system, use proper POST request instead',
			], 401 );
		}

		$class = $this->mapper->getEntityClass();
		$item  = new $class();

		$response = $this->checkAccess( $request->getMethod() === 'OPTIONS' ? 'GET' : null, 'api:create', [
			'class' => $class,
			'item' => $item,
		] );
		if ( $response ) {
			return $response;
		}


		$data = $this->getDataFromUrl( $request->query, 'create' );
		if ( !count( $data ) ) {
			return $this->json( [
				'error' => 'missing or invalid data',
			], 400, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		try {
			$item = $this->mapper->fromSerializable( $data, $item, 'create' );

			$this->validate( $item );
		}
		catch ( \Exception $error ) {
			$this->logger->error( 'validating provided data failed: ' . $error->getMessage() );
			return $this->json( [
				'error' => 'validating provided data failed: ' . $error->getMessage(),
			], 422, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		try {
			$orm = $this->getDoctrine()->getManager();
			$orm->persist( $item );
			$orm->flush();
		}
		catch ( \Exception $error ) {
			$this->logger->error( 'writing data to database failed: ' . $error->getMessage() );
			return $this->json( [
				'error' => 'writing data to database failed: ' . $error->getMessage(),
			], 400 );
		}

		return $this->json( [
			'success' => true,
			'id'      => $item->getId(),
		], 200, $this->qualifyHeaders( [
			'content-type' => 'application/json',
		] ) );
	}

	/**
	 * Handles requests to fetch properties of single item of managed entity.
	 *
	 * The item is selected by its unique numeric ID provided in another segment
	 * of URL path name.
	 *
	 * @Route("/{id}", methods={"GET", "OPTIONS"}, requirements={"id"="\d+"})
	 *
	 * @param int $id ID of record to fetch
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function getAction( $id, Request $request ) {
		$class = $this->mapper->getEntityClass();

		$criteria = Criteria::create();
		$criteria->where( Criteria::expr()->eq( 'id', $id ) );

		$criteria = $this->processCriterion( $criteria );

		$repo = $this->getDoctrine()->getRepository( $class );
		$item = $repo->matching( $criteria )->first();

		$response = $this->checkAccess( $request->getMethod() === 'OPTIONS' ? 'GET,PUT,DELETE' : null, 'api:get', [
			'class' => $class,
			'item' => $item,
		] );
		if ( $response ) {
			return $response;
		}

		if ( !$item ) {
			return $this->json( [
				'error' => 'no such item: ' . $id,
			], 404, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		$object = $this->mapper->toSerializable( $item, 'get' );

		return $this->json( $object, 200, $this->qualifyHeaders( [
			'content-type' => 'application/json',
		] ) );
	}

	/**
	 * Handles requests to replace values of one or more properties of a single
	 * item of managed entity. Set of properties to be adjusted is provided as
	 * JSON object in request's body.
	 *
	 * The item is selected by its unique numeric ID provided in another segment
	 * of URL path name.
	 *
	 * @Route("/{id}", methods={"PUT", "OPTIONS"}, requirements={"id"="\d+"})
	 *
	 * @param int $id ID of record to update
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function updateAction( $id, Request $request ) {
		$class = $this->mapper->getEntityClass();

		$repo = $this->getDoctrine()->getRepository( $class );
		$item = $repo->find( $id );
		if ( !$item ) {
			return $this->json( [
				'error' => 'no such item: ' . $id,
			], 404, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		$response = $this->checkAccess( $request->getMethod() === 'OPTIONS' ? 'PUT' : null, 'api:update', [
			'class' => $class,
			'item' => $item,
		] );
		if ( $response ) {
			return $response;
		}


		$data = json_decode( $request->getContent(), true );
		if ( !is_array( $data ) ) {
			return $this->json( [
				'error' => 'missing or invalid data',
			], 400, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		try {
			$item = $this->mapper->fromSerializable( $data, $item, 'update' );

			$this->validate( $item );
		}
		catch ( \Exception $error ) {
			$this->logger->error( 'validating provided data failed: ' . $error->getMessage() );
			return $this->json( [
				'error' => 'validating provided data failed: ' . $error->getMessage(),
			], 422, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		try {
			$orm = $this->getDoctrine()->getManager();
			$orm->persist( $item );
			$orm->flush();
		}
		catch ( \Exception $error ) {
			$this->logger->error( 'writing data to database failed: ' . $error->getMessage() );
			return $this->json( [
				'error' => 'writing data to database failed: ' . $error->getMessage(),
			], 400 );
		}

		return $this->json( [
			'success' => true,
		], 200, $this->qualifyHeaders( [
			'content-type' => 'application/json',
		] ) );
	}

	/**
	 * Handles requests to replace values of one or more properties of a single
	 * item of managed entity. Set of properties to be adjusted is provided in
	 * URL query parameters.
	 *
	 * The item is selected by its unique numeric ID provided in another segment
	 * of URL path name.
	 *
	 * This method is available for conveniently requesting this action using
	 * regular browser in development environment. It isn't available in
	 * production environment.
	 *
	 * @Route("/{id}/edit", methods={"GET", "OPTIONS"},
	 *     requirements={"id"="\d+"})
	 * @Route("/{id}/update", methods={"GET", "OPTIONS"},
	 *     requirements={"id"="\d+"})
	 *
	 * @param int $id ID of record to update
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function updateGetAction( $id, Request $request ) {
		if ( !$this->isDevelopmentEnvironment() ) {
			return $this->json( [
				'error' => 'GET variant of endpoint not available in production system, use proper PUT request instead',
			], 401 );
		}

		$class = $this->mapper->getEntityClass();

		$repo = $this->getDoctrine()->getRepository( $class );
		$item = $repo->find( $id );
		if ( !$item ) {
			return $this->json( [
				'error' => 'no such item: ' . $id,
			], 404, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		$response = $this->checkAccess( $request->getMethod() === 'OPTIONS' ? 'GET' : null, 'api:update', [
			'class' => $class,
			'item' => $item,
		] );
		if ( $response ) {
			return $response;
		}


		$data = $this->getDataFromUrl( $request->query, 'update' );
		if ( count( $data ) ) {
			try {
				$item = $this->mapper->fromSerializable( $data, $item, 'update' );

				$this->validate( $item );
			}
			catch ( \Exception $error ) {
				return $this->json( [
					'error' => 'validating provided data failed: ' . $error->getMessage(),
				], 422, $this->qualifyHeaders( [
					'content-type' => 'application/json',
				] ) );
			}

			try {
				$orm = $this->getDoctrine()->getManager();
				$orm->persist( $item );
				$orm->flush();
			}
			catch ( \Exception $error ) {
				return $this->json( [
					'error' => 'writing data to database failed: ' . $error->getMessage(),
				], 400 );
			}
		}

		return $this->json( [
			'success' => true,
		], 200, $this->qualifyHeaders( [
			'content-type' => 'application/json',
		] ) );
	}

	/**
	 * Handles requests to remove item of managed entity.
	 *
	 * The item is selected by its unique numeric ID provided in another segment
	 * of URL path name.
	 *
	 * The item is selected by its unique numeric ID provided in another segment
	 * of URL path name.
	 *
	 * This method additionally supports GET requests using keywords `delete` or
	 * `remove` in another segment of URL path name following the one containing
	 * item's unique ID. This support if for conveniently requesting this action
	 * using regular browser in development environment. It isn't available in
	 * production environment.
	 *
	 * @Route("/{id}", methods={"DELETE", "OPTIONS"},
	 *     requirements={"id"="\d+"})
	 * @Route("/{id}/delete", methods={"GET", "OPTIONS"},
	 *     requirements={"id"="\d+"})
	 * @Route("/{id}/remove", methods={"GET", "OPTIONS"},
	 *     requirements={"id"="\d+"})
	 *
	 * @param int $id ID of record to remove
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function removeAction( $id, Request $request ) {
		if ( $request->getMethod() === "GET" ) {
			if ( !$this->isDevelopmentEnvironment() ) {
				return $this->json( [
					'error' => 'GET variant of endpoint not available in production system, use DELETE requests instead',
				], 401 );
			}
		}

		$class = $this->mapper->getEntityClass();

		$repo = $this->getDoctrine()->getRepository( $class );
		$item = $repo->find( $id );
		if ( !$item ) {
			return $this->json( [
				'error' => 'no such item: ' . $id,
			], 404, $this->qualifyHeaders( [
				'content-type' => 'application/json',
			] ) );
		}

		$response = $this->checkAccess( $request->getMethod() === 'OPTIONS' ? preg_match( '#/(?:remove|delete)#', $request->getPathInfo() ) ? 'GET' : 'DELETE' : null, 'api:remove', [
			'class' => $class,
			'item' => $item,
		] );
		if ( $response ) {
			return $response;
		}


		$orm = $this->getDoctrine()->getManager();
		$orm->remove( $item );
		$orm->flush();

		return $this->json( [
			'success' => true,
		], 200, $this->qualifyHeaders( [
			'content-type' => 'application/json',
		] ) );
	}

	/**
	 * Checks if current request has sufficient authorization.
	 *
	 * @param null|string $method name of supported HTTP method if current
	 *        request method is OPTIONS, null on non-OPTIONS requests
	 * @param string $attributes description of requested action on optionally
	 *        provided subject
	 * @param object|null $subject item addressed in request
	 * @param string $corsHeaders comma-separated list of request header field names to promote in actual requests
	 * @return null|Response special response created internally instantly
	 *         ending request handling, null if request may be handled further
	 *         on
	 */
	protected function checkAccess( $method, $attributes, $subject = null, $corsHeaders = null ) {
		try {
			$this->denyAccessUnlessGranted( $attributes, $subject );

			if ( $method ) {
				return new Response( json_encode( [
					'success' => true,
				] ), 200, [
					'Access-Control-Allow-Origin' => '*',
					'Access-Control-Allow-Methods' => $method,
					'Access-Control-Allow-Headers' => $corsHeaders ? $corsHeaders . ',authorization' : 'authorization',
					'Content-Type' => 'application/json',
				] );
			}

			return null;
		}
		catch ( AccessDeniedException $error ) {
			if ( $method ) {
				return new Response( json_encode( [
					'warning' => 'This request requires authentication.',
				] ), 200, [
					'Access-Control-Allow-Origin' => '*',
					'Access-Control-Allow-Method' => $method,
					'Access-Control-Allow-Headers' => $corsHeaders ? $corsHeaders . ',authorization' : 'authorization',
					'Content-Type' => 'application/json',
					'WWW-Authenticate' => 'Basic realm="eSigning Backend Application", charset="UTF-8"',
				] );
			}

			throw $error;
		}
	}
}
