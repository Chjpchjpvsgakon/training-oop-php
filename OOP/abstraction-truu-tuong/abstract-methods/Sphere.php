<?php  

require_once 'ThreeDimensShape.php';

class Sphere extends ThreeDimensShape{

	public function volume(){
		return 4/3 * pi() * pow($this->dimensions['radius'], 3);
	}

}


?>