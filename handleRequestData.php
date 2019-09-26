<?php

echo "<pre>" . var_export($_GET, true) . "</pre>";

if(isset($_GET['name'])){
	echo "<br>Hello, " . $_GET['name'] . "<br>";
	}

if(isset($_GET['number'])){
	$number = $_GET['number'];
	echo "<br>" . $number . " should be a number...";
	echo "<br>but it might not be<br>";
	}

if(isset($_GET['number1'])&&($_GET['number2'])){
	
	$sum = intval($_GET['number1'])+intval($_GET['number2']);
	echo "<br>" . $sum . " is the sum of two numbers...";
	}
if(isset($_GET['string1'])&&($_GET['string2'])){
	$cat = ($_GET['string1'])."".($_GET['string2']);

	echo "<br>" . $cat . " concatinating two strings";
	}
?>
