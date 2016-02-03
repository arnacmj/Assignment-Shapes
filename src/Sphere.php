<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Circle implements ShapeInterface {

	protected $radius;

	/**
	 * Circle constructor.
	 *
	 * @param int $radius
	 */
	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	/**
	 * Get the area
	 *
	 * @return 
	 */
	public function area()
	{
		return 4 * pi() * sqrt($this->radius);
	}

	/**
	 * Get the volume
	 *
	 * @return 
	 */
	public function volume()
	{
		return 4 / 3 * pi() * sqrt($this->radius) * $this->radius;
	}

}
