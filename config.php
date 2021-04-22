<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$db_name = "sis";

//create connection
$conn = new mysqli($host, $username, $password, $db_name);

//check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

?>
