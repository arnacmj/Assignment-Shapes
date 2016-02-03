<?php

include_once('src/Sphere.php');

class SphereTest extends\PHPUnit_Framework_TestCase {

	public function testGetTheAreaOfSphere()
	{
		$radius = 5;
		$result = 4 * pi() * sqrt($radius);
		$area_sphere = new Shape/Sphere($radius);
		
		$this->assertEquals($result, $area_sphere);
	}
	
	public function testGetTheVolumeOfSphere()
	{
	 	$radius = 4;
	 	$result = 4 / 3 * pi() * sqrt($radius) * $radius;
	 	$volume_sphere = new Shape/Sphere($radius);
	 	
	 	$this->assertEquals($result, $volume_sphere);
	}

}
