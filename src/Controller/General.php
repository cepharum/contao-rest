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

use App\Mapper\AutoMapper;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/api/general")
 */
class General extends ApiController {
	public function __construct( ParameterBagInterface $parameters, LoggerInterface $logger ) {
		parent::__construct( $parameters, $logger );
		$this->mapper = new AutoMapper( $this, $logger );
	}

	public function getEntityManager() {
		return $this->getDoctrine()->getEntityManager();
	}

	/**
	 * @Route("", methods={"GET", "OPTIONS"})
	 * @Route("/", methods={"GET", "OPTIONS"})
	 *
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function listClasses( Request $request ) {

		$meta = $this->getDoctrine()->getEntityManager()->getMetadataFactory()->getAllMetadata();

		$entities = [];
		foreach ( $meta as $m ) {
			$name = $m->getName();
			if ( substr( $name, 0, 13 ) == 'App\Entity\Tl' ) {
				$name = lcfirst(substr($name, 13));
			}
			$entities[] = $name;
		}

		return $this->json(
			[ 'items' => $entities, 'count' => count( $entities ) ],
			200,
			['content-type' => 'application/json']
		);
	}

	/**
	 * @Route("/{class}", methods={"GET", "OPTIONS"})
	 * @Route("/{class}/", methods={"GET", "OPTIONS"})
	 *
	 * @param Request $request description of incoming request
	 * @return Response response to request
	 */
	public function generalListAction( Request $request, $class ) {
		if ( class_exists( "App\\Entity\\$class" ) ) {
			$this->mapper->setEntityClass( "App\\Entity\\$class" );
		}
		else if ( class_exists( 'App\Entity\Tl' . ucfirst( $class ) ) ) {
			$this->mapper->setEntityClass( 'App\Entity\Tl' . ucfirst( $class ) );
		}
		else {
			return $this->json( [
				'error' => 'invalid class name',
			], 400 );
		}
		return $this->listAction( $request );
	}
}
