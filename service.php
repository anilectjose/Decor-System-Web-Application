<?php 
include 'connection.php';
$su_id=$_GET['s_id'];

$result=mysqli_query($conn,"SELECT * FROM `services_db` where services_id='$su_id'");
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
<?php include 'sidebar.php';?>

<div class="common-div">    
<h3>Service Detail</h3>
<div id="block_container">
<?php 
            $count=0;
            while ($row = mysqli_fetch_assoc($result)) {  ?>
            
<div class="blah">
<div class="card-detail">
<h3 style="margin-left:10px;"><?php echo $row['services'];?></h3>
<p style="margin-top:-12px; margin-left:10px;">₹ <?php echo $row['price'];?></p>
</div>
<div class="card-detail-two">
<p style="margin-left:10px; margin-bottom:-5px;">Description: <?php echo $row['sdesc'];?></p><br>
<a href="add_service.php?s_id=<?php echo $row['services_id'];?>">
    <input type="submit" value="Register" name="btn_add" style="padding: 5px; margin: 15px;"></a>
</div></div>
<?php } ?>
</div></div>
</body>
</html>