<?php 
include 'connection.php';

 if(isset($_POST['submit']))
 {

    $name=$_POST['firstname']; 
    $sprice=$_POST['lastname'];
    $sdesc=$_POST['subject'];

    mysqli_query($conn,"INSERT INTO `complaint_db`(`fname`, `lname`, `subj`) VALUES 
    ('$name','$sprice','$sdesc')");

        echo "<script>alert('Added');</script>";
        echo "<script>window.history.back();</script>";
 }


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.common-div{
    margin-left:90px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<?php include 'sidebar.php';?>

<div class="common-div">
<h3>Contact Form</h3>
<div class="container">
  <form method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
</div>
</div>
</body>
</html>