<?php 
include_once 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>GrassBandits</title>
</head>
<body>

    <?php
    
    $write = "";
    $read = "SELECT * FROM `requests`;";
    $result = mysqli_query($conn, $read);
    $ResultNotNull = "";
    
    
    
    
    ?>




</body>
</html>