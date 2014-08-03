<?php
include('connect.php');

$sqlQuery = "SELECT * FROM users";

// $results = mysqli_query($link, $sqlQuery);
$results = $link -> query($sqlQuery);
$rows = $results -> num_rows;

echo "<pre>";
echo "<div>";
while ($row = $results -> fetch_assoc()) {
	echo "<figure><img src=" . $row['profile_pic'] . "/></figure>";
	echo "<h1>" . $row['first_name'] . ", " . $row['last_name'] . "</h1>";
	echo "<h3>" . $row['email'] . "</h3>"; 
	// print_r($row);
}
echo "<div>";

// CLEARS MEMORY
$results -> free();

die();

// NUMERIC ARRAY
// mySQL RESULT TYPE:
// MYSQLI_NUM, MYSQLI_ASSOC, MYSQLI_BOTH

// $row = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>

