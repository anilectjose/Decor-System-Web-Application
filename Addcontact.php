<?php 
include 'connection.php';

 if(isset($_POST['submit']))
 {

    $name=$_POST['serv_name']; 
    $sprice=$_POST['serv_price'];
    $sdesc=$_POST['serv_desc'];

    mysqli_query($conn,"UPDATE `contacts_db` SET `phone`='$name', `email`='$sprice', `address`='$sdesc' where contact_id=1");

        echo "<script>alert('Added');</script>";
        echo "<script>window.history.back();</script>";
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
    <style>
        .common-div{
    width:700px;
    margin-left:250px;
}

        h2{
            margin-left:400px; 
            font-family: "Raleway", Helvetica, sans-serif;
        }
        textarea{
          width:200px;
          padding: 5px;  
          border-radius: 10px;
        }
  input[type=text],[type=password],[type=email],[type=number],textarea {
    width: 180px;
    padding: 5px;  
    border-radius: 10px;
    margin-top: 30px;
  }
  input[type=submit]{
    width: 70px;
    height: 35px;
    background-color: #39b6ff;
    color: white;
    padding: 10px;
    margin: 30px 20px 0 30px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
  }
    input[type=reset]{
    width: 70px;
    height: 35px;
    background-color: #ff3939;
    color: white;
    padding: 10px;
    margin: 30px 20px 0 30px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
  }

  #survey-fields {
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 10px;
    margin-bottom: 10px;
  }
    #survey-form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
</style>
</head>
<body>
<?php include 'sidebar2.php';?>
<div class="common-div">
<h2 id="title" class="title">Add Contact Details</h2>
  <div class="addservices-div">
  <form method="POST"><div id="survey-form">
      <section id="survey-fields">

        <label for="name" id="name-label">* Phone:</label>
        <input id="name" type="number" placeholder="Enter service name" name="serv_name" style="margin-left: 30px;" required><br>
        <label for="name" id="name-label">* Email:</label>
        <input id="name" type="email" placeholder="Enter service price" name="serv_price" style="margin-left: 40px;" required><br>
        <label for="w3review">* Address:</label>
        <textarea id="text" type="text" placeholder="Enter service description" name="serv_desc" rows="4" cols="50"></textarea><br>
      <input type="submit" value="Submit" name="submit"><input type="reset" value="Clear">

      <a href="complaints.php" style="color: green; text-decoration: none;">
        <p style="margin-left: 50px; margin-top: 50px;">>>View feedback from users...</p></a>
      </section>
    </div>
    </form> 
  </div>
</div>
</body>
</html>