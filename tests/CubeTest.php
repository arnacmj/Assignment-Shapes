<?php

use Shape/Cube;

class CubeTest extends\PHPUnit_Framework_TestCase {

	public function testGetTheAreaOfCube()
	{	
		$side = 20;
		$result = 6 * sqrt($side);
		$area_cube = new Cube($side);
		
		$this->assertEquals($result, $area_cube);
		
	}
	
	public function testGetTheVolumeOfCube()
	{
		$side = 10;
		$result = sqrt($side) * $side;
		$volume_cube = new Cube($side);
		
		$this->assertEquals($result, $volume_cube);
	}

}
