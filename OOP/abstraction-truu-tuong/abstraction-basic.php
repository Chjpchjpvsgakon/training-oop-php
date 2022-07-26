<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Abstraction</title>

		
	</head>
	<body>
		<?php  
			require 'Reservation.php';

			$reservation = new Reservation();

			$reservation->cancel();
		?>
	</body>
</html>
