<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "db";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
} else {
    // echo "Connected Successfully";
}
