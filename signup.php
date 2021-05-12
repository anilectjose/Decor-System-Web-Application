<?php
include 'connection.php';

if (isset($_POST['signup'])) {
  $Name=$_POST['username'];
  $Pass=$_POST['password'];
  $contact=$_POST['phonenumber'];
  $Email=$_POST['email'];
  mysqli_query($conn,"INSERT INTO login_tbl( username, password, role) VALUES ('$Name','$Pass','user')");
  $role_id=mysqli_insert_id($conn);

  mysqli_query($conn,"INSERT INTO user_registration(email, phonenumber, login_id) VALUES ('$Email','$contact','$role_id')");
  echo "<script>window.history.back();</script>";
}
?>



<html>
  <title>signup</title>
<head>
  <body background="back.jpeg"><center><form method="post">
    <h1><b><font color="red">SIGNUP</font></b></h1>
    <label for="username">username</label>
    <input type="text" name="username" id="name"><br><br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"><br><br>
    <label for contact>contact</label>
    <input type="text" name="phonenumber" id="phoneno"><br><br>
    <label for="email">email</label>
    <input type="email" name="email" id="email"><br><br>
    <input type="submit" name="signup"><br>
    <a href="index.php">signup</a>
  </form></center></body></head></html>