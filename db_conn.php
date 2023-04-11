<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn) {
die("Connection failed" . mysqli_connect_error());
}






/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
    die("Connection Failed" . $conn->connect_error);
else {echo "Connected successfully"}*/
?>