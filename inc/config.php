<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'foxnetis';

	$fxnt = mysqli_connect($host, $user, $password, $database) or die (mysqli_connect_error());

?>