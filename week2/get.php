<?php

echo "<pre>";
print_r($_GET);

if (isset($_GET['y'])) {
	echo $_GET['y'];
} else {
	echo "Y is not set";
}

?>