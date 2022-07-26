<?php  

//Create a Basket class
class Basket{
	//add itemsTotal and shippingCost public properties
	public $itemTotal;
	public $shippingCost;
	public $discount;

	public function calculateSubTotal(){
		$subTotal =  $this->itemTotal + $this->shippingCost - $this->discount;
		return $subTotal;
	}

}
//Instantiate a Basket using new keyword

$basket = new Basket();

//Set values for both properties
$basket->itemTotal = 10;
$basket->shippingCost = 50;
$basket->discount = 20;


//Use var_dump and check your work in the browser 
//var_dump($basket);
$stt = $basket->calculateSubTotal();
var_dump($stt);

?>