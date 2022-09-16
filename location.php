<?php

// configuring
require("config.php");
session_start();

// get user's ip and access key for api
$ip = $_SERVER['REMOTE_ADDR'];
$key = API_KEY;

// call the IP location API
$url ="https://api.ipgeolocation.io/ipgeo?apiKey=$key&ip=$ip";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result =json_decode(curl_exec($ch));
curl_close($ch); 

// put the result in a session to use this in the view page.
$_SESSION['location'] = $result;

// return to the index page
$host = $_SERVER['HTTP_HOST'];
$uri = dirname($_SERVER['PHP_SELF']);
header("Location: https://$host$uri/");
