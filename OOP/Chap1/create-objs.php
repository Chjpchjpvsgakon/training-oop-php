<?php  
class User{
 	public $name;
 	public $address;
 	public $score;
}

$halo = new User();
$halo->name = 'Gn0l';
$halo->address = 'Ha Noi';
$halo->name = 100000000;

print_r($halo);
?>