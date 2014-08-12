<table style="border: 1px solid #000; width: 75%;">
	<tr>
		<th style="background: #000; color: #fff;">Username</th>
		<th style="background: #000; color: #fff;">Comments</th>
	</tr>

	<?php

	$sql = "SELECT * FROM comments INNER JOIN users ON comments.user_id=users.id";

	// $results = mysqli_query($link, $sqlQuery);
	$results = $link -> query($sql);
	$rows = $results -> num_rows;

	while ($row = $results -> fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
		echo "<td>" . $row['comment'] . "</td>";
		echo "</tr>";
		// print_r($row);
	}


	?>

</table>