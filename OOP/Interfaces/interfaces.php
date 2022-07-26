<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Weather API Interfaces</title>

		
	</head>
	<body>
		<h1>Weather App</h1>
		<?php  

			require 'DarkSkyApiClient.php';

			$weatherApiClient = new DarkSkyApiClient();

			$forecast = $weatherApiClient->getForecast('New York');


		?>
		<p><?php echo $forecast; ?></p>
	</body>
</html>