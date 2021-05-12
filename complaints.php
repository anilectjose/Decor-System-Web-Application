<?php 
include 'connection.php';
$result=mysqli_query($conn,"SELECT * FROM `complaint_db`");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
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
<h3>Complaints</h3>
<div id="block_container">
<?php 
            $count=0;
            while ($row = mysqli_fetch_assoc($result)) {  ?>
            
<div class="blah">
<div class="card-detail">
<h3 style="margin-left:10px;"><?php echo $row['fname']." ".$row['lname'];?></h3>
<p style="margin-top:-12px; margin-left:10px;">User</p>
</div>
<div class="card-detail-two">
<p style="margin-left:10px;"><b>Complaint:</b> <?php echo $row['subj'];?></p><br>
<?php } ?>
</div></div>
</body>
</html>