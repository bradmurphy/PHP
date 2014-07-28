<?php 

/**
*
* WHILE LOOP
* while (expression)
*	statement...
*endwhile;
*/

// WHILE LOOP

$i = 1;
echo "<b>Here's my while loop</b><br/>";
while($i <= 10) {
	echo $i++, "<br />";
}

echo "<hr/>";

// OTHER WHILE LOOP

/**
*while ($i <= 10):
*	echo $i . "<br/>";
*	$i++;
*endwhile;
*
*echo "<hr/>";
*/

// DO WHILE LOOP

$i2 = 0;
echo "<b>Here's my do while loop</b><br/>";
do {
	echo $i2;
} while ($i2 > 0);

echo "<hr/>";

// FOR LOOPS

echo "<b>For Loop</b><br/>";
for ($i3 = 1; $i3 <= 10; $i3++) {
	echo $i3 . "<br/>";
}

echo "<hr/>";

// FOR EACH

$array = array(1, 2, 3, 4, 5);

echo "<b>For Each Loop</b><br/>";
foreach ($array as $value) {
	echo ($value * 2) . "<br/>";
}

echo "<hr/>";

$array2 = array(
	'color'		=>		'orange',
	'cereal'	=>		'frosted flakes',
	'pizza'		=>		'pepperoni'
	);

echo "<b>For-Each Loop with Key Value Pairs</b><br/>";
foreach ($array2 as $key => $value) {
	if ($key === "pizza") {
		echo "<b>$key</b>: " . "<b style='color: red;'>$value</b><br/>";
	} else {
		echo "<b>$key</b>: " . $value . "<br/>";
	}
}

echo "<hr/>";

// CONTINUE

$my_array = array(1, 2, 3, 4, 5);
echo "<b>Continue</b><br/>";
foreach ($my_array as $number) {
	if ($number === 3) {
		continue;
	}
	echo $number . "<br/>";
}

echo "<hr/>";

// BREAKING

$my_array2 = array(1, 2, 3, 4, 5, 6);
echo "<b>Break</b><br/>";
foreach ($my_array2 as $number) {
	if ($number === 3) {
		break;
	}
	echo $number . "<br/>";
}

?>
