<?php
function DB_connection()
{
	$port="3306";
	$user="root";
	$pass="ankit";
	$host="localhost";
	$dbname="sinup";
	$tabelname="userinfo";
    $conn = new mysqli($host,$user,$pass,$dbname,$port) or die("Connect failed: %s\n". $conn -> error);
	return $conn;
}
?>

