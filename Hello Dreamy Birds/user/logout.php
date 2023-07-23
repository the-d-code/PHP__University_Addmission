<?php
session_start(); 
session_destroy(); // destroy session
// header("location:login.php"); 
 echo '<script>alert("Session is closed,Please login.")</script>';
    echo "<script>window.location.href ='login.php'</script>";

?>

