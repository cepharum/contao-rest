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

use App\Entity\TlPage;
use App\Mapper\AutoMapper;
use Psr\Log\LoggerInterface;
use Doctrine\Common\Collections\Criteria;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/api/page")
 */
class Pages extends ApiController {
	public function __construct( ParameterBagInterface $parameters, LoggerInterface $logger ) {
		parent::__construct( $parameters, $logger );
		$this->mapper = new AutoMapper( $this, $logger );
		$this->mapper->setEntityClass( TlPage::class );
	}

	/**
	 * Method getEntityManager()
	 *
	 * This function is needed by the AutoMapper class to get access to Doctrine's entity manager.
	 */
	public function getEntityManager() {
		return $this->getDoctrine()->getEntityManager();
	}

	/**
	 * @Route("/{idOrAlias}", methods={"GET", "OPTIONS"}, requirements={"idOrAlias"="\w+"})
	 */
	public function getPageByAlias( $idOrAlias, Request $request ) {

		return $this->queryDatabaseWithCriterias( [ is_numeric( $idOrAlias ) ? 'id' : 'alias', 'eq', $idOrAlias ], $request->getMethod(), $this->getDataFromUrl( $request->query, 'list' ), null, 1 );
	}

	protected function collectSubPages_recursive( $repository, $id, $maxDepth, $type, $urlData = null, $depth = 0, $path = [] ) {

		$results = [];

		$criteria = Criteria::create();
		$criteria->where( $this->compileExpression ( 'id', 'eq', $id ) );
		if ( is_array( $urlData ) ) {
			foreach ( $urlData as $name => $value ) {
				if ( preg_match( '/^\$(?:([^:]+):)?(.+)$/', $value, $match ) ) {
					$operator = $match[1];
					$value = $match[2];
				} else {
					$operator = 'eq';
				}
				$criteria->andWhere( $this->compileExpression( $name, $operator, $value ) );
			}
		}
		$criteria = $this->processCriterion( $criteria );
		$page = $repository->matching( $criteria )->first();

		if ( $page ) {
			if ( $type == 'list' || $type == 'tree' ) {
				$pageData = [ 'id' => $page->getId(), 'alias' => $page->getAlias(), 'published' => $page->getPublished() ];
			}
			else {
				$pageData = $this->mapper->toSerializable( $page, 'list' );
			}
			if ( $type == 'list' || $type == 'list-data' ) {
				$results[] = array_merge( [ '_path' => $path ], $pageData );
			}
			else {
				$results[ 'item' ] = $pageData;
			}
		}
		else if ( $type == 'tree-data' ) {
			$page = $repository->find( $id );
			$results[ 'item' ] = [ 'id' => $page->getId(), 'alias' => $page->getAlias(), 'published' => $page->getPublished() ];
		}

		if ( $depth < $maxDepth ) {
			$children = $repository->findBy(
				[ 'pid' => $id ],
				[ 'sorting' => 'ASC' ]
			);
			$childrenData = [];
			if ( is_array( $children ) ) {
				foreach ( $children as $child ) {
					$childrenData[] = $this->collectSubPages_recursive( $repository, $child->getId(), $maxDepth, $type, $urlData, $depth + 1, array_merge( $path, [ $id ] ) );
				}
			}
			if ( $type == 'list' || $type == 'list-data' ) {
				foreach ( $childrenData as $childData ) {
					$results = array_merge( $results, $childData );
				}
			}
			else {
				$results[ 'children' ] = $childrenData;
			}
		}

		return $results;
	}

	/**
	 * Method getSubPages()
	 *
	 * This function is querying Contao's database for a given page and subordinated pages.
	 *
	 * @param string $idOrAlias		ID or alias of the first page to look after.
	 * @param int $maxDepth			Number of levels below first page to look for subordinated pages
	 *									e.g. 2, to look for direct children and their direct children
	 * @param null|string $type		Desired format of the response array, may be one of those:
	 *									'list' (default value)
	 *											All found pages will be contained in the response
	 *											as an one-dimensional list,
	 *											The pages' hierarchy will be represented at every page
	 *											with an array-field '_path',
	 *											e.g. '_path' = [3, 7], if the given page is the child
	 *												of the page with ID 7 and grandchild of the page with ID 3
	 *											The response will only include basic data about every page,
	 *											e.g. [ 'id' => 3, 'alias' => 'home', 'published' => 1 ]
	 *											Like before but the response will contain
	 *											all the page's data from the database.
	 *									'tree'
	 *											All found pages will be contained in the response
	 *											as a two-dimensional array, following the pages' hierarchy.
	 *											The response will only include basic data about every page,
	 *											e.g. [ 'id' => 3, 'alias' => 'home', 'published' => 1 ]
	 *									'list-data' or 'tree-data'
	 *											Like before but the response will also contain
	 *											all the page's data from the database.
	 *
	 * This API-route might also combined with URL-filters like '?published=1' (but not when $type == 'tree').
	 * That's what happens then:
	 *			With $type == 'list' and $type == 'list-data',
	 *				the complete list is filtered and contains only those pages which match the filter.
	 *			With $type == 'tree-data',
	 *				all found pages will still be included in the response
	 *				but only the pages which match the filter will be delivered with full data.
	 *
	 * @Route("/{idOrAlias}/{maxDepth}/{type}", methods={"GET", "OPTIONS"}, requirements={"idOrAlias"="\w+", "maxDepth"="\d+"})
	 */
	public function getSubPages( $idOrAlias, $maxDepth, $type = 'list', Request $request ) {

		$repo = $this->getDoctrine()->getRepository( TlPage::class );

		$urlData = $this->getDataFromUrl( $request->query, 'list' );
		if ( ! is_array( $urlData) || count( $urlData ) == 0 ) {
			$urlData = null;
		}
		$maxDepth = max( 0, min( $maxDepth, 20 ) );
		switch ( $type ) {
			case 'list':
			case 'list-data':
			case 'tree-data':
				break;
			case 'tree':
				if ( $urlData != null ) {
					return $this->json(
						[ 'error' => "can't combine response type 'tree' with url-filters, use type 'list' or 'tree-data' instead" ],
						404,
						$this->qualifyHeaders( [ 'content-type' => 'application/json' ] )
					);
				}
				break;
			default:
				return $this->json(
					[ 'error' => "unknown response type $type" ],
					404,
					$this->qualifyHeaders( [ 'content-type' => 'application/json' ] )
				);
		}

		$key = is_numeric( $idOrAlias ) ? 'id' : 'alias';
		$page = $repo->findOneBy( [ $key => $idOrAlias ] );
		if ( !$page) {
			return $this->json(
				[ 'error' => "can't find page with $key '$idOrAlias'" ],
				404,
				$this->qualifyHeaders( [ 'content-type' => 'application/json' ] )
			);
		}

		return $this->json(
			[ 'type' => $type, 'data' => $this->collectSubPages_recursive( $repo, $page->getId(), $maxDepth, $type, $urlData ) ],
			200,
			$this->qualifyHeaders( [ 'content-type' => 'application/json' ] )
		);
	}
}
