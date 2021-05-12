<?php 
include 'connection.php';
$su_id=$_GET['s_id'];

$result=mysqli_query($conn,"SELECT * FROM `book_db` join login_tbl on login_tbl.login_id=book_db.user_id join user_registration on 
user_registration.login_id=login_tbl.login_id join services_db on 
services_db.services_id=book_db.service_id where book_db.booking_id='$su_id'");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Details</title>
    <style>
        h3{
            font-family: "Raleway", Helvetica, sans-serif;
        }
        a{
          text-decoration:none;
        }
        .card-detail{
            background-color: rgb(240, 74, 56);
            font-family: verdana;
            width:350px;
            height: 100px;
            padding:3px;
            color:white;
        }
        .card-detail-two{
            font-family: verdana;
            width:350px;
            margin-top:-30px;
            padding:3px;
            background:lightblue;
        }
        .blah{
            margin-right:20px;
        }
                .common-div{
    width:700px;
    margin-left:100px;
}
        </style>
</head>
<body>
<?php include 'sidebar2.php';?>

<div class="common-div">    
<h3>Service Detail</h3>
<div id="block_container">
<?php 
            $count=0;
            while ($row = mysqli_fetch_assoc($result)) {  ?>
            
<div class="blah">
<div class="card-detail">
<h3 style="margin-left:10px;"><?php echo $row['username'];?></h3>
<p style="margin-top:-12px; margin-left:10px;"><?php echo $row['services'];?></p>
</div>
<div class="card-detail-two">
<p style="margin-left:10px; margin-bottom:-15px;">Phone: <?php echo $row['phonenumber'];?></p><br>
<p style="margin-left:10px; margin-bottom:-5px;">Email: <?php echo $row['email'];?></p><br>
<a href="accept_work.php?s_id=<?php echo $row['booking_id'];?>">
    <input type="submit" value="Accept" name="btn_add" style="padding: 5px; margin: 15px;"></a>
<a href="cancel_work.php?s_id=<?php echo $row['booking_id'];?>">
    <input type="submit" value="Decline" name="btn_add" style="padding: 5px; margin: 15px;"></a>
</div></div>
<?php } ?>

</div>
      <a href="recent.php" style="color: green; text-decoration: none;">
        <p style="margin-left: 50px; margin-top: 50px;">>>Recent orders...</p></a></div>
</body>
</html>