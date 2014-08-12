<?php

// echo "<pre>";
// print_r($_POST);

$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : "";
$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? md5(SALT . $_POST['password']) : "";

// if (isset(_POST['fname'])) {
// 	$first_name = $_POST['fname'];
// } else {
// 	$first_name = "";
// }

// if (isset(_POST['lname'])) {
// 	$last_name = $_POST['lname'];
// } else {
// 	$last_name = "";
// }

// if (isset(_POST['email'])) {
// 	$email = $_POST['email'];
// } else {
// 	$email = "";
// }

// if (isset(_POST['pic'])) {
// 	$pic = $_POST['pic'];
// } else {
// 	$pic = "";
// }

// ERROR HANDLING

if ($first_name === "") {
	die("You must enter your first name!");
}

if ($last_name === "") {
	die("You must enter your last name!");
}

if ($email === "") {
	die("You must enter your email!");
}

if ($password === "") {
	die("You must enter your picture url!");
}

// SQL LOGIC TO CHECK EMAILS

$emailSQL = "SELECT * FROM users WHERE email = '$email'";

if ($result = $link -> query($emailSQL)) {
	if ($result -> num_rows >= 1) {
		echo "That email already exists.";
	} else {
		// SQL LOGIC (if errors out, page will die)
		$sql = " INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password') ";

		if ($link -> query($sql) === false) {
			die ("You had a mysql error");
		} else {
			$last_inserted_id = $link -> insert_id;
			$affected_rows = $link -> affected_rows;
		}

		echo "The user inserted was user ID: " . $last_inserted_id;
	}
} else {
	echo "ERROR";
}

?>