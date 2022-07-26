<?php  

require_once 'CheckingAccount.php';


class PremiumCheckingAccount extends CheckingAccount{

	public $miniumBalance = 5000;
}

?>