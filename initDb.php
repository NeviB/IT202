<?php
//TODO add error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//load the config from the same directory
require('config.php');
echo "Loaded host: " . $host;

//new lines below
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

try{
	$db = new PDO($conn_string, $username, $password);
	echo "Connected";
}
catch(Exception $e){
	echo $e->getMessage();
	echo "Something went wrong";
}
