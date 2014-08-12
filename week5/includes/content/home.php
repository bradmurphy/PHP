<p>Welcome to my website!</p>

<?php 

if ($_SESSION['logged_in']) {
	print_r($_SESSION);
	echo "Welcome back, " . $_SESSION['first_name'] . " " . $_SESSION['last_name'];
	include('comments.php');
	include('all_comments.php');
}

?>