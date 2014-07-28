<?php

if (isset($_POST['first_name'])) {
	$first_name = $_POST['first_name'];
} else {
	$first_name = "";
}

if (isset($_POST['last_name'])) {
	$last_name = $_POST['last_name'];
} else {
	$last_name = "";
}

if (isset($_POST['email'])) {
	$email = $_POST['email'];
} else {
	$email = "";
}

// echo "<pre>";
// print_r($_POST);

echo "Hello, " . $_POST['first_name'] . " " . $_POST['last_name'] . ", your email is " . $_POST['email'] . ".";

?>