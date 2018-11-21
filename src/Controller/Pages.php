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
	 * @Route("/{alias}", methods={"GET", "OPTIONS"}, requirements={"alias"="\w+"})
	 */
	public function getPageByAlias( $alias, Request $request ) {

		return $this->queryDatabaseWithCriterias( [ 'alias', 'eq', $alias ], $request->getMethod(), $this->getDataFromUrl( $request->query, 'list' ), null );
	}

	/**
	 * @Route("/{id}/{depth}", methods={"GET", "OPTIONS"}, requirements={"id"="\d+", "depth"="\d+"})
	 */
	public function getSubPages( $id, $depth ) {

		if ( $depth < 0 ) {
			$depth = 0;
		}
		if ( $depth > 10 ) {
			$depth = 10;
		}

	}
}
