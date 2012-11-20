<?php

	class Geonames{
		//define the base url for the api
		private $base_url = 'http://api.geonames.org/';

		//construct the class by passing the api username
		//go to http://www.geonames.org to register and get one
		function __construct($username){
			$this->username = $username;
			return $username;
		}

		private function connect($function,$parameters){
			$str = '';
			
			$parameters['username'] = $this->username;
			$str= '';
			foreach($parameters as $key=>$value){
				$str.= "{$key}={$value}&";

			}
			echo $this->base_url.$function.$str."<br />";
			$ch = curl_init($this->base_url.$function.$str);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = json_decode(curl_exec($ch));
			curl_close($ch);
			return $result;
		}



		public function search($parameters){
			/*
			Pass the parameters as an array
			
			*/

			$data = $this->connect('searchJSON?',$parameters);
			return $data;
		}

		public function findNearByWikipedia($parameters){
			$data = $this->connect('findNearbyWikipediaJSON?',$parameters);
			return $data;
		}

		public function wikipediaSearch($parameters){
			$data = $this->connect('wikipediaSearchJSON?',$parameters);
			return $data;
		}

		public function findNearByWeather($parameters){
			$data = $this->connect("findNearByWeatherJSON?",$parameters);
			return $data;
		}
	}

?>