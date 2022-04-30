<?php // Personal Home Page (PHP)
    
    include_once 'connect.php';

    $name = $_POST['name'];
    $house_number = $_POST['service_house_number'];
    $street_city = $_POST['service_street_and_city'];
    $job = $_POST['job_needed'];
    $date = $_POST['date_of_service'];
    $time = $_POST['time_of_service'];

    $write = "INSERT INTO `requests` (`name`, `service_house_number`, `service_street_and_city`, `job_needed`, `date`, `time`, `status`) 
    VALUES ('$name', '$house_number', '$street_city', '$job', '$date', '$time', false)";

    mysqli_query($conn, $write);

    header("Location: index.php");

        
?>
