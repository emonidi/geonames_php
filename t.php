<?php

	require "Geonames.php";
	$g = new Geonames('demo');
	$city  = $g->search(array('name_startsWith'=>'Sofia',"lang"=>"BG"));
	$city = $city->geonames['0'];
	$weather =  $g->findNearByWeather(array('lat'=>$city->lat,'lng'=>$city->lng));
	var_dump($weather);
	$wiki_info  = $g->findNearByWikipedia(array('lat'=>$city->lat,'lng'=>$city->lng));

	echo "<p>";
		var_dump($wiki_info);
	echo "<p/>";
?>