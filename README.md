geonames_php
============

A simple php class that uses cURL to connect with api.geonames.org and retrieve information

1.How to use:

1.1. You need to have a geonames username in order to use this class. If you don't you need to go to www.geonames.org and register in order to get one.

1.2 Instantiate the class:

We use the demo username here. Please put your own after getting one

			$geonames = new Geonames('demo');

1.3 After the class is instantiated you can access the following functions that are currently supported:

- search:

			$city = $geonames->search($search_params);		

	You need to pass the search parameters as an array. For example	

			$search_params =  array("q"=>"London","lang"=>"EN");
			$city = $geonames->search($search_params);

	For more info about the accepted parameters please visit http://www.geonames.org/export/geonames-search.html 


- findNearByWikipedia:

	This function searches for info about places in Wikipedia based on provided lattitude and longitude or postal codes.
	For more info please visit http://www.geonames.org/export/wikipedia-webservice.html#findNearbyWikipedia

	Example:
			
			$city_info = $geonames->findNearByWikipedia(array('lat'=>'23.366666666667','lng'=>'42.633333333333'));


- wikipediaSearch
	
	This function searches for info about places in Wikipedia based on search string.
	For more info please visit http://www.geonames.org/export/wikipedia-webservice.html#findNearbyWikipedia

	Example:

			$city_info = $geonames->wikipediaSearch(array('q'=>'London'));

- findNearByWeather

		This function searches for info about weather based on provided coordinates.
		For more info pleaase visit http://www.geonames.org/export/JSON-webservices.html#weatherJSON

		Example:

			$weather_info = $geonames->findNearByWeather(array('lat'=>'23.366666666667','lng'=>'42.633333333333'));