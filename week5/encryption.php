<?php

// ENCRYPTION

$salt = sha1("a98dsa7f0ashdf0809a8he098h3410938hafea089fha3");

$passwordFromFrom = $_POST['password'];

// plaintext
$password = md5($salt + "abc123");
// $password = sha1("abc123");

echo $password;

?>

