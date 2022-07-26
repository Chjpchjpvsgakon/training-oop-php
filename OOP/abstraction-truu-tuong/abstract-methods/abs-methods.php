<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Abstract Methods</title>

		
	</head>
	<body>
		<?php  

		require 'Cylinder.php';
		require 'Sphere.php';

		$cyl = new Cylinder(['radius' => 5, 'height' => 10]);
		$cylvol = $cyl->volume();

		$sphere = new Sphere(['radius' => 5]);
		$spherevol = $sphere->volume();
		print_r($spherevol);

		?>
	</body>
</html>