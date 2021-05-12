<?php
include 'connection.php';
session_start();
if(isset($_SESSION['login_admin']))
{
  header("location:dashboard.php");
}
if (isset($_POST["submit"]))
{
  $usrname = mysqli_real_escape_string($conn,$_POST['usrnm']);
  $epassword = mysqli_real_escape_string($conn,$_POST['pswd']);

  $sql=mysqli_query($conn,"SELECT * FROM login_tbl WHERE username='$usrname' AND password='$epassword'");

    while ($row = mysqli_fetch_assoc($sql)) {

  if($row['role']=='admin')
  {
    $_SESSION['login_admin']=$row['login_id'];
    header("location: admin_dashboard.php");
  }
  elseif($row['role']=='user')
  {
    $_SESSION['login_admin']=$row['login_id'];
    header("location: dashboard.php");
  }
  else
  {
    echo "<script>alert('Username and password are incorrect')</script>";
    echo "<script>window.location='index.php'</script>";
  }
}
}

?>
<html>
<head>
<title>LOGIN PAGE</title>
</head>
<body background="backg.jpg"><center><form method="post">
<h1><b><font color="blue"> LOGIN TO HOMEDECOR </font></b></h1><br>
<label for="username">USERNAME</label>
<input type="text" name="usrnm" id="username"><br><br><br>
<label for="password">PASSWORD</label>
<input type="password" name="pswd" id="password"><br><br>
<input type="submit" name="submit"><br> 
new to homedecor?<a href="signup.php">signup</a>
</form></center>
</body>
</html>