<?php


namespace calderawp\repository;


/**
 * Class Factoryable
 * @package calderawp\repository
 */
interface Factoryable {

	/**
	 * Factory for creating new instances when not in repo
	 *
	 * @param $key
	 *
	 * @return mixed
	 */
	 public function factory( $key );

}