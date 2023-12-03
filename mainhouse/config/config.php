<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "property";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
// if ($conn->connect_error) {
// 	die("Connection failed: " . $conn->connect_error);
// }

// try
// {
// $con = new PDO("mysql:host=".$servername.";dbname=".$databasename,$username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// }
// catch (PDOException $e)
// {
// exit("Error: " . $e->getMessage());
// }
