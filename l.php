<?php
	$link = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
	$ip =  $_SERVER['REMOTE_ADDR'];
	
	$location = file_get_contents('http://freegeoip.net/json/'.$ip);

	//$location_encode = json_encode($location);

	$location_decode = json_decode($location);

	//echo $location_decode->ip;
 	
	//print_r($location);

	$query = " INSERT INTO click_history (url, ip, details, who) VALUES('$link', '$ip', '$location', '$employee_email')";

	$query_do = mysqli_query($con, $query);

	?>
