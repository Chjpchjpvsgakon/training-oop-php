<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Tinh Ke Thua OOP</title>

		
	</head>
	<body>
		<?php
		// 1.Origin Class
		// require 'Account.php';
		// $account = new Account();
		// $account->deposit(10);
		// $account->withdraw(30);

		// 2.Require class extends and call
		// require 'CheckingAccount.php';
		// $checkAcc = new CheckingAccount();
		// $checkAcc->deposit(15);
		// $checkAcc->withdraw(45);
		// $checkAcc->transfer(100);

		//3. Ke thua khong gioi han 
		require 'PremiumCheckingAccount.php';

		$preCheckAcc = new PremiumCheckingAccount();
		$preCheckAcc->deposit(15);
		$preCheckAcc->withdraw(45);
		$preCheckAcc->transfer(100);
		echo $preCheckAcc->miniumBalance;
	  	?>
	</body>	
</html>