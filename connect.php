<?php
$servername = "localhost";

// username here:
$username = "";

// password here!
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("CRITICAL ERROR! CONNECTION FAILED! Err: " . $conn->connect_error);
} 
echo "CONNECTION SUCCESSFULL";
?>

