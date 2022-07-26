<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Abstract Class</title>

		
	</head>
	<body>
		
		<?php  

		require 'Product.php';

		$product =  new Product();
		$product->save();

		
		require 'User.php';

		$user =  new User();
		$user->save();
		?>
	</body>
</html>