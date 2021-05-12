<?php
session_start();
$usrId=$_SESSION["login_admin"];
include 'connection.php';
$su_id=$_GET['s_id'];
mysqli_query($conn,"INSERT INTO `book_db`(`user_id`, `service_id`, `sta`) VALUES ('$usrId','$su_id','pending')");
        header('location: dashboard.php');
?>