<p>Welcome to my website!</p>

<?php 

if ($_SESSION['logged_in']) {
	echo "Welcome back, " . $_SESSION['first_name'] . " " . $_SESSION['last_name'];
}

?>