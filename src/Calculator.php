<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
		$totalSurfaceArea = $shape['cube', 'sphere', 'circle', 'square'];
		return array_sum($totalSurfaceArea);
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
		$totalShapeVolume = $shape['cube', 'sphere'];
		return array_sum($totalShapeVolume);
	}

}
