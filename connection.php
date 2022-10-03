<?php
 
$servername = "localhost";
$username = "muhavi";
$password = "adg00jad";
$dbname = "samplephp";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}