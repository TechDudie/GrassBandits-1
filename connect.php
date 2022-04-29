<?php // Personal Home Page (PHP)
$servername = "localhost";

// username here:
$username = "root";

// password here!
$password = "";

// database name here:

$db_name = "GrassBandits";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
  die("CRITICAL ERROR! CONNECTION FAILED! Err: " . $conn->connect_error);
} 
echo "CONNECTION SUCCESSFULL";
?>

