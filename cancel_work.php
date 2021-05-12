<?php
//session_start();
//$usrId=$_SESSION["login_data"];
include 'connection.php';
$su_id=$_GET['s_id'];
mysqli_query($conn,"UPDATE `book_db` set sta='Cancelled' where booking_id='$su_id'");
        header('location: admin_dashboard.php');
?>