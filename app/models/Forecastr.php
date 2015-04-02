<?php

class Forecastr {

	public static function setIcons($icon) {

		switch($icon) {
			case "clear-day":
				return "wi-day-sunny";
				break;
			case "clear-night":
				return "wi-night-clear";
				break;	
			case "rain":
				return "wi-rain";
				break;
			case "snow":
				return "wi-snow";
				break;
			case "sleet":
				return "wi-sleet";
				break;
			case "wind":
				return "wi-strong-wind";
				break;
			case "fog":
				return "wi-fog";
				break;
			case "cloudy":
				return "wi-cloudy";
				break;
			case "partly-cloudy-day":
				return "wi-day-cloudy";
				break;
			case "night-partly-cloudy":
				return "night-partly-cloudy";
				break;
			default:
				return "wi-cloudy";
		}

		//return "hello from method" . " $icon";

	}

}
