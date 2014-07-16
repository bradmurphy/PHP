<?php

// echo "hello world!";

// Single line comment

# Single line comment

/**
 * Block Comment
 * DockBlock
 */

/*
	Another block comment
	Use for multiline
*/

/** PHP Debug Information / Command to see php version/configuration	
* phpinfo();
*/

// $myVariable = 12;

// $trueVariable = TRUE; Caplitalized in PHP
// $falseVariable = FALSE;
// $nEvERWriteAvaRiabLelIkEtHiS = "no";

// echo $myVariable;
// echo $falseVariable;
// echo $trueVariable;
// echo $nEvERWriteAvaRiabLelIkEtHiS;

// Concatination

// $myVariable1 = "My name is ";
// $myVariable2 = "Brad.";
// $myVariablesCombined = $myVariable1 . $myVariable2;
// echo $myVariablesCombined;

// Variables inside variables - Must use " " for Variables inside Variables! (Not '')
// $foo = "Brad.";
// $bar = "Hello, $foo";

// echo $bar;

// function add($a, $b) {
// 	echo $a + $b;
// };

// add (2, 2);

// // CONSTANT
// define("APPNAME", "My very first PHP app");
// // GLOBAL
// $globalVariable = 10;

// function add($a, $b) {
// 	global $globalVariable;
// 	echo $a + $b + $globalVariable;
// 	echo APPNAME;
// };

// add(2, 2);

// $myArrayVariable = array(
// 	"key" 		=>		"value",
// 	"brad" 		=>		"murphy",
// 	"html" 		=>		"css",
// 	"array"		=>		array (
// 		"october"		=>		"halloween",
// 		"november"		=>		"thanksgiving",
// 		"december"		=>		"christmas"
// 		)
// 	);

// echo "<pre>";
// var_dump($myArrayVariable);
// echo $myArrayVariable["brad"];
// echo $myArrayVariable["array"]["october"];
// echo count($myArrayVariable);

// LOGIC

// $variableA = TRUE;
// $variableB = FALSE;

// if ($variableA) {
// 	echo "This is a true condition, it passed so you can see this.";
// } 

// if ($variableB) {
// 	echo "This is a false condition, so it won't appear on the page.";
// }

// TERNARY

// $variable = 10;
// $variableIsGreaterThanTwo = ($var > 2 ? TRUE : FALSE);

// if ($variable > 2) {
// 	$variableIsGreaterThanTwo = TRUE;
// } else {
// 	$variableIsGreaterThanTwo = FALSE;
// }

/* 

	Equal 
	$a == $b

	Identical 
	$a === $b

	Not Equal 
	$a != $b

	Not Identical 
	$a !== $b

	Greater Than
	$a > $b

	Less Than
	$a < $b

	Less than or equal too
	$a <= $b

	Greater than or equal too
	$a >= $b

*/

// $i = 0;

// if ($i === 0) {
// 	echo "i equals 0";
// } elseif ($i === 1) {
// 	echo "i equals 1";
// } else if ($i === 2) {
// 	echo "i equals 2";
// } else {
// 	echo "i does not equal 0, 1 or 2";
// }

// switch ($i) {
// 	case 0: 
// 	echo "i equals 0";
// 	breakl

// 	case 1:
// 	echo "i equals 1";
// 	break;

// 	case 2:
// 	echo "i equals 2";
// 	break;

// 	default:
// 	echo "i does not equal 0, 1 or 2";
// 	break;
// }


// // COUNTING/LENGTH
// $variableStr = "howmanycharactersareinthisvariable?";
// echo strlen($variableStr);

// $variable = "dan, sally, pamela, bob";
// $names = explode(',', $variable);

// echo "<pre>";
// var_dump($names);

// echo $names[0];

// $lowercaseVariable = strtoupper("daniel");
// $uppercaseVariable = strtolower("DANIEL");

// echo $lowercaseVariable;
// echo $uppercaseVariable;



?>

<!-- Javascript -->

<script>

// var myVariable = 0;
// console.log(myVariable);

// var myVariable1 = "My name is ";
// myVariable2 = "Brad.";

// var myVariablesCombined = myVariable1 + myVariable2;
// console.log( myVariablesCombined);

// function add(a, b) {
// 	console.log(a+b);
// };

// add(2, 2);

// var globalVariable = 10;

// function add(a, b) {
// 	console.log(a + b + globalVariable);
// }

// add(2, 2);

// var myArray = [1, 2, 3, 4, 5];

// console.log(myArray);
// console.log(myArray.length);

</script>