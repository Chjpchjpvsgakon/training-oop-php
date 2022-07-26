<?php  

require_once 'WeatherApiClientInterface.php';

class OpenWeatherMapClient implements WeatherApiClientInterface{
	public function getForecast($city){
		// Call Open Weather Map APi ussing city parameter


		//return some kind of response 
		return 'It is raining in '. $city;


	}
}

?>