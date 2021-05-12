<?php
include 'connection.php';

$result=mysqli_query($conn,"SELECT * FROM `services_db` ");

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
<?php include 'sidebar.php';?>

<div class="common-div">
<h3>Dashboard</h3>

<div id="block_container">      <?php 
            while ($row = mysqli_fetch_assoc($result)) {  ?>    
<a href="service.php?s_id=<?php echo $row['services_id']; ?>">

<div class="card-div-green">
    <?php echo $row['services']; ?>
    <h4 class=card-div>₹ <?php echo $row['price'];?></h4>
</div></a><?php } ?>
</div>
      <a href="recent_orders.php" style="color: green; text-decoration: none;">
        <p style="margin-left: 50px; margin-top: 50px;">>>View recent orders...</p></a>
</div>
</body>
</html>