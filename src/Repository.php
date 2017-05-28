<?php


namespace calderawp\repository;


/**
 * Class Repository
 * @package calderawp\repository
 */
abstract class Repository {

	/**
	 * Stores instances
	 *
	 * @var array
	 */
	protected  $items;

	/**
	 * Repository constructor.
	 *
	 * @param array $items Array of instances to add when insantiating
	 */
	public function __construct( array  $items = [] )
	{
		$this->items = $items;
	}

	/**
	 * Is key present?
	 *
	 * @param int|string $key
	 *
	 * @return bool
	 */
	public function has( $key )
	{
		return array_key_exists( $key, $this->items );
	}

	/**
	 * Get key
	 *
	 * @param int|string $key
	 *
	 * @return mixed
	 */
	public function get( $key )
	{
		if( $this->has( $key ) ){
			return $this->items[ $key ];
		}

	}

	/**
	 * Set key
	 *
	 * @param int|string $key
	 * @param mixed $value
	 */
	public function set( $key, $value )
	{
		$this->items[ $key ] = $value;
	}


}