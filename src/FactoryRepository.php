<?php


namespace calderawp\repository;


/**
 * Class FactoryRepository
 * @package calderawp\repository
 */
abstract class FactoryRepository extends Repository {


	/**
	 * Get key
	 *
	 * @param int|string $key
	 *
	 * @return mixed
	 */
	public function get( $key )
	{
		return $this->getOrCreate( $key );
	}

	/**
	 * Get value, possibly by creating
	 *
	 * @param int|string $key
	 *
	 * @return mixed
	 */
	protected function getOrCreate( $key )
	{
		if( $this->has( $key ) ){
			return $this->items[ $key ];
		}

		$this->items[ $key ] = $this->factory( $key );
		return $this->items[ $key ];

	}
}