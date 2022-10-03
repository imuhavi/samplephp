<?php
include("connection.php");
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];

$sqlquery = "INSERT INTO users (`email`, `password`) VALUES
    ('$email', '$password')";
 
if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}
}
?>