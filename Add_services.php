<?php 
include 'connection.php';

 if(isset($_POST['submit']))
 {

    $name=$_POST['serv_name']; 
    $sprice=$_POST['serv_price'];
    $sdesc=$_POST['serv_desc'];

    mysqli_query($conn,"INSERT INTO `services_db`( `services`, `price`, `sdesc`) VALUES 
    ('$name','$sprice','$sdesc')");

        echo "<script>alert('Added');</script>";
        echo "<script>window.history.back();</script>";
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
    <style>
        .addservices-div{
            padding-top:20px;
            margin-left:220px;
            background:white;
            width:100%;
            border-radius:5px;
        }
        h2{
            margin-left:500px; 
            font-family: "Raleway", Helvetica, sans-serif;
        }
        textarea{
          width:200px;
          padding: 5px;  
          border-radius: 10px;
        }
        select{
            width:140px; 
            height:30px;
            border-radius:5px;
        }
            input[type=submit] {
    width: 80px;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    margin: 4px 0 20px 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
  }

  input[type=reset] {
    width: 80px;
    height: 36px;
    background-color: #ff3939;
    color: white;
    padding: 10px;
    margin: 4px 0 20px 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
  }
</style>
</head>
<body>
<?php include 'sidebar2.php';?>
<div class="common-div">
<h2 id="title" class="title">Add Services    </h2>
  <div class="addservices-div">
  <form method="POST"><div id="survey-form">
      <section id="survey-fields">

        <label for="name" id="name-label">* Service:</label>
        <input id="name" type="text" placeholder="Enter service name" name="serv_name" required>
        <label for="name" id="name-label">* Price:</label>
        <input id="name" type="number" placeholder="Enter service price" name="serv_price" required>
        <label for="w3review">* Description:</label>
        <textarea id="text" type="text" placeholder="Enter service description" name="serv_desc" rows="4" cols="50"></textarea>
      <input type="submit" value="Submit" name="submit"><input type="reset" value="Clear">
      </section>
    </div>
    </form> 
  </div>
</div>
</body>
</html>