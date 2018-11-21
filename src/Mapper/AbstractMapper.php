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

use App\Controller\ApiController;
use Psr\Log\LoggerInterface;

/**
 * A mapper implements entity-specific serialization and deserialization to be
 * used with a controller exposing that entity as part of REST API.
 *
 * @package App\Mapper
 */
abstract class AbstractMapper {
	/**
	 * Refers to class in namespace App\Entity representing the entity to be
	 * managed by current mapper instance.
	 *
	 * @var object
	 */
	protected $entityClass;

	/**
	 * Refers to instance of controller this mapper is used by to handle some
	 * current request.
	 *
	 * @var ApiController
	 */
	protected $controller;

	/**
	 * @var LoggerInterface
	 */
	protected $logger;

	/**
	 * Lists names of properties to be obeyed on serializing/deserializing
	 * instances of managed entity. In addition every listed property name is
	 * associated with an optional getter and an optional setter.
	 *
	 * Getters or setters may be given as string to name methods of instances of
	 * managed entity class to be invoked for actually getting or setting the
	 * value of related property. They may be given as _callables_ selecting
	 * custom methods to invoke for implicitly converting property's value from
	 * or to its serialized form. Any _callable_ might use string `this` as
	 * context to request mapping to current instance of mapper.
	 *
	 * Finally, getters and setters might be `null` to exclude related property
	 * from serialization (getter) or ignore existing value in serialized form
	 * on deserialization (setter).
	 *
	 * @example
	 *
	 * The following map is currently used with App\Entity\Product
	 * ```php
[
	[ 'id',						'getId', null ],
	[ 'name',					'getName', 'setName' ],
	[ 'assetTerm',				'getAssetTerm', 'setAssetTerm' ],
	[ 'description',			'getDescription', 'setDescription' ],
	[ 'ageDescription',			'getAgeDescription', 'setAgeDescription' ],
	[ 'fixedCharacteristics',	'getFixedCharacteristics', 'setFixedCharacteristics' ],
	[ 'isPublic',				'getIsPublic', 'setIsPublic' ],
	[ 'contracts',				['this', 'getProductContracts'], null ],
]
	 * ```
	 *
	 * @var array
	 */
	protected static $propertyMap = [];

	/**
	 * Exposes class of entity managed by current mapper instance.
	 *
	 * @return \ReflectionClass
	 */
	public function getEntityClass() {
		return $this->entityClass;
	}

	/**
	 * AbstractMapper constructor.
	 *
	 * @param \ReflectionClass|string $entityClass reflects class of entity to be managed by instance
	 * @param ApiController $controller
	 * @param LoggerInterface $logger used to log mapper-related information
	 */
	public function __construct( $entityClass, ApiController $controller, LoggerInterface $logger ) {
		$this->entityClass = $entityClass;
		$this->controller  = $controller;
		$this->logger      = $logger;
	}

	/**
	 * Retrieves property map listing properties to be included with
	 * serialization and/or deserialization by associating either property's
	 * name with a method of instance of managed entity to read/write provided
	 * value or some local method of mapper instance used to import/export
	 * either value.
	 *
	 * @param string $contextAction name of action map is to be used on
	 *     processing
	 * @return array map of properties and related getters/setters of entity
	 */
	public function getPropertyMap( $contextAction ) {
		$map = static::$propertyMap ?: [];

		foreach ( $map as $key => $mapping ) {
			list( $propertyName, $getter, $setter ) = $mapping;

			if ( is_array( $getter ) && $getter[0] === 'this' ) {
				$getter[0] = $this;
			}

			if ( is_array( $setter ) && $setter[0] === 'this' ) {
				$setter[0] = $this;
			}

			$map[$key] = [ $propertyName, $getter, $setter ];
		}

		return $map;
	}

	/**
	 * Maps properties of a given entity to regular associative array as used
	 * in receiving/transmitting via HTTP.
	 *
	 * @param object $entityItem reference on entity to be populated with values
	 * @param string $contextAction optional name of action this mapping is
	 *     used with
	 * @return array regular associative array suitable for serialization
	 */
	public function toSerializable( $entityItem, $contextAction ) {
		$object = [];

		$map = $this->getPropertyMap( $contextAction );
		foreach ( $map as $mapping ) {
			list( $name, $getter ) = $mapping;

			if ( is_string( $getter ) ) {
				$object[$name] = call_user_func( array( $entityItem, $getter ) );
			} else if ( is_callable( $getter ) ) {
				$object[$name] = call_user_func( $getter, $entityItem, $name );
			}
		}

		return $object;
	}

	/**
	 * Updates provided entity from properties of a regular associative array
	 * as used in receiving/transmitting via HTTP.
	 *
	 * @template T
	 * @param array $serializableObject associative array of properties to be written
	 * @param object<T> $entityItem reference on entity to be populated with values
	 * @param string $contextAction optional name of action this mapping is
	 *     used with
	 * @return object<T> reference on provided entity to be populated with values
	 */
	public function fromSerializable( $serializableObject, $entityItem, $contextAction ) {
		$map = $this->getPropertyMap( $contextAction );
		foreach ( $map as $mapping ) {
			list( $name, , $setter ) = $mapping;

			if ( array_key_exists( $name, $serializableObject ) ) {
				if ( is_string( $setter ) ) {
					call_user_func( array( $entityItem, $setter ), $serializableObject[$name] );
				} else if ( is_callable( $setter ) ) {
					call_user_func( $setter, $entityItem, $serializableObject[$name], $name, $serializableObject );
				}
			}
		}

		return $entityItem;
	}
}
