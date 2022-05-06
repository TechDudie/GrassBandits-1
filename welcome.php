<?php
// Initialize the session
session_start();
 
// Check if the user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; background-image: linear-gradient(90deg, rgba(0,200,0,1) 0%, rgba(0,255,0,1) 50%, rgba(0,200,0,1) 100%); }
    </style>
</head>
<body>
    <h1 class="my-5">Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Say hello to GrassBandits!</h1>
    <p>

        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
     
    </p>
 
 <div>
  <form action="insert.php" method="POST" class="req_form">
   <br>
   <input type="text" name="contact_info" placeholder="Contact info"></input>
   </br>
 <br>
        
        <input type="text" name="contact_info" placeholder="Contact info"></input>
 </br>
<br>
        
        <input type="text" name="service_address" placeholder="Address"></input>
</br>
<br>
        
        <input type="text" name="job_needed" placeholder="Job Needed"></input>
</br>
<br>
        
        <input type="datetime-local" name="date" placeholder="Date and time"></input>
</br>
<br>
        
        <button type="submit" name="submit">Submit</button>
</br>
        


     </form>
 </div>
</body>
</html>
