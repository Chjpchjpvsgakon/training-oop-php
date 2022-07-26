<?php  

require_once 'ThreeDimensShape.php';

class Cylinder extends ThreeDimensShape{

	public function volume(){

		return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
	}
}
?>