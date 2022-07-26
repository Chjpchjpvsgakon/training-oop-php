<?php  

require_once 'DataModel.php';

class Product extends DataModel{
	private $name;
	private $price;
	protected $tableName = 'products';


	public function getName():string
	{
		return $this->name;
	}

	public function setName($name):void 
	{
		$this->name = $name;
	}


	public function getPrice():float
	{
		return $this->price;
	}

	public function setPrice($price):void 
	{
		$this->price = $price;
	}
}

?>