<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Cube implements ShapeInterface {

	protected $sides;

	/**
	 * Cube constructor.
	 *
	 *
	 */
	public function __construct($sides)
	{
		$this->sides = $sides;
	}

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
		return 6 * sqrt($this->sides);
	}

	/**
	 * Get the volume
	 * 
	 *
	 * 
	 */
	public function volume()
	{
		return sqrt($this->sides) * $this->sides;
	}

}
