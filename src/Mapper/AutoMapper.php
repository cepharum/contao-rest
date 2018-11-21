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

namespace App\Mapper;


use Doctrine\ORM\EntityManager;

use App\Controller\ApiController;
// use App\Entity\User;
use Psr\Log\LoggerInterface;

/**
 * class AutoMapper
 *
 * This class defines a mapper class which is can be connected to any known entity.
 *
 * You have to call the method setEntityClass() on initialisation.
 * The entity's property-map will then be generated dynamically.
 */
class AutoMapper extends AbstractMapper {

	/**
	 * This property determines if this mapper class shall deliver any setter routines or not.
	 *
	 * With $readOnly set to 'true', the method getPropertyMap() will only deliver getter classes
	 * so that no changes to the database can be made.
	 */
	protected $readOnly;

	/**
	 * Note: The given controller class has to implement the routine getEntityManager().
	 */
	public function __construct( ApiController $controller, LoggerInterface $logger ) {
		parent::__construct( '', $controller, $logger );
		$this->readOnly = true;
	}

	/**
	 * This function sets the entity class which shall be managed by this mapper class.
	 *
	 * @param string $class		Class name of the entity, e.g. 'App\Entity\TlArticle'.
	 *							You may also pass the name of the database-table
	 *								associated to the entity class,
	 *								e.g. 'article' or 'tl_article' or 'TlArticle'
	 * @return bool		True if and only if entity class was successfully recognized
	 */
	public function setEntityClass( $class = '') {

		if ( ! is_string( $class ) || $class == '' ) {
			$this->entityClass = '';
			return true;
		}

		if ( strlen( $class) > 3 && substr( $class, 0, 3 ) == 'tl_' ) {
			$class = substr( $class, 3 );
		}

		if ( class_exists( $class ) ) {
			$this->entityClass = $class;
		}
		else if ( class_exists( "App\\Entity\\$class" ) ) {
			$this->entityClass = "App\\Entity\\$class";
		}
		else if ( class_exists( 'App\Entity\Tl' . ucfirst( $class ) ) ) {
			$this->entityClass = 'App\Entity\Tl' . ucfirst( $class );
		}
		else {
			$this->entityClass = '';
			return false;
		}

		return true;
	}

	/**
	 * Method getPropertyMap()
	 *
	 * This function dynamically generates the property-map of the entity
	 * which this mapper class is connected to.
	 *
	 * You have to call setEntityClass() before using this method.
	 *
	 * @param string $contextAction		Name of action map is to be used on processing
	 * @return array	Property-map with all fields of the entity
	 *						and the matching getter and setter routines,
	 *						e.g. [ [ 'id', 'getId', null ], [ 'title', 'getTitle', 'setTitle' ] ]
	 *					If the current instance is read-only, all setter routines will be set to 'null'.
	 *					If the current instance isn't connected to any entity yet, an empty array will be returned.
	 */
	public function getPropertyMap( $contextAction ) {

		if ( $this->entityClass == '' ) {
			return [];
		}

		$meta = $this->controller->getEntityManager()->getClassMetadata( $this->entityClass );
		$fieldNames = $meta->getFieldNames();
		$identifier = $meta->getIdentifierColumnNames();

		$map = [];
		foreach ( $fieldNames as $field ) {
			$mapping = [ $field, null, null ];
			foreach ( [ '1' => 'get', '2' => 'set' ] as $i => $prefix ) {
				if ( $prefix !== 'set' || ( ! $this->readOnly && array_search( $field, $identifier ) === false ) ) {
					if ( method_exists( $this->entityClass, $prefix . ucfirst( $field ) ) ) {
						$mapping[ $i ] = $prefix . ucfirst( $field );
					}
				}
			}
			$map[] = $mapping;
		}

		return $map;
	}
}
