<?php
include 'connection.php';

$result=mysqli_query($conn,"SELECT * FROM `book_db` join login_tbl on login_tbl.login_id=book_db.user_id join services_db on 
services_db.services_id=book_db.service_id where book_db.sta='pending'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="stylesheet.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
              h3{
            font-family: "Raleway", Helvetica, sans-serif;
        }
        a{
          text-decoration:none;
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
<h3>Dashboard</h3>

<div id="block_container">      <?php 
            while ($row = mysqli_fetch_assoc($result)) {  ?>    
<a href="booked.php?s_id=<?php echo $row['booking_id']; ?>">

<div class="card-div-green">
    <?php echo $row['services']; ?>
    <h4 class=card-div><?php echo $row['username'];?></h4>
</div></a><?php } ?>
</div>
</div>
</body>
</html>