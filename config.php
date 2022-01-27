<?php
	session_start();

	require_once "./Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '594377634535135',
		'app_secret' => '04475cc961a1293f18bfa53653b6fd90',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
