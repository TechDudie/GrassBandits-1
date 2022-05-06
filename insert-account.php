<?php // Personal Home Page (PHP)
    
    include_once 'connect.php';


    $contact = $_POST['contact_info'];
    $address = $_POST['service_address'];
    $job = $_POST['job_needed'];
    $date = $_POST['date'];

    $write = "INSERT INTO `requests` (`name`, `service_address`, `contact_info`, `job_needed`, `date`, `status`) 
    VALUES ('$_SESSION["username"]', '$address', '$contact', '$job', '$date', false);";

    mysqli_query($conn, $write);

    header("Location: thanks.html");





        
?>
