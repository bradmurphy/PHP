<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<?php

		if($_SESSION['logged_in']) {
			// If the user is logged in, do not show register
			echo '<li><a href="index.php?page=logout">Log Out</a></li>';
		} else {
			// Show regiister
			echo '<li><a href="index.php?page=login">Log In</a></li>';
			echo '<li> <a href="index.php?page=register">Register</a></li>';
		}

		?>
	</ul>
</nav>