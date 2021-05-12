<?php
include 'connection.php';

$result=mysqli_query($conn,"SELECT * FROM `contacts_db` ");

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {

  align-items:center;
  width: auto;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  width:;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
  width:auto;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}



.container:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<?php include 'sidebar.php';?>
<div class="common-div">
<div class="about-section">
  <h1>About Us</h1>
  <p>WE DO ALL TYPE OF HOME DECORATINS FOR UR EVENTS</p>
</div>
<?php while ($row = mysqli_fetch_assoc($result)) {  ?>    
<h2 style="text-align:center">CONTACT US</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="contact.jpg" alt="ancy" style="width:100%; height: 400px;">
      <div class="container">
        <h2>ANCY ALEXANDER</h2>
        <p class="title">CEO & Founder</p>
        <p>Email:<?php echo $row['email'];?></p>
        <p>mobile:<?php echo $row['phone'];?></p>
        <p>office:<?php echo $row['address'];?></p>
      </div>
    </div>
  </div>
<?php } ?>
</div>
</body>
</html>