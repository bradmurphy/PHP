<?php

define("SALT", "Oh yeah, bitch");

// CONNECT TO THE MYSQL
// $link = mysql_connect('database_server', 'mysql_username', 'mysql_password');
$link = mysqli_connect('127.0.0.1', 'root', '', 'phpsummerq5');

// $link -> error
if (mysqli_connect_errno()) {
	die('Could not connect to server.' . mysqli_error());
}

?>