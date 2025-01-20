<?php

$servername = "localhost";
$UserName = "root"; 
$Password = "123456";
$dbname = "storedb";
$port = "3306";



$conn = new mysqli($servername,$UserName,$Password,$dbname,$port);

if ($conn->connect_error) {
    die("No Connection " . $conn->connect_error);
}
?>

