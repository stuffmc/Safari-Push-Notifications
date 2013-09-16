<?php
require_once("config.php");

function mysqli_do($q) {
	$c = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysqli_error($c));
	mysqli_select_db($c, DB_NAME) or die(mysqli_error($c));
	$r = mysqli_query($c, $q) or die(mysqli_error($c));
	mysqli_close($c);
	return $r;
}