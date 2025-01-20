<?php 
$dbtype = "mysql";
$host = "localhost";
$dbname = "storedb";
$userName = "root";
$password = "123456";
$port = "3306";

$connection = new PDO("$dbtype:host=$host;port=$port;dbname=$dbname", $userName, $password);
// <!-- var_dump($connetion);

?>