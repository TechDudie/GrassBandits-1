<?php // Personal Home Page (PHP)
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



    <form action="req_service_insert.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="service_house_number" placeholder="House number">
        <br>
        <input type="text" name="service_street_and_city" placeholder="Street, City">
        <br>
        <input type="text" name="job_needed" placeholder="Job Needed">
        <br>
        <input type="text" name="date_of_service" placeholder="Date">
        <br>
        <input type="text" name="time_of_service" placeholder="Time">

        <button type="submit" name="submit">Submit</button>

     </form>
    




</body>
</html>