<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>   
     /* Style the links inside the sidenav */
#mySidenav a {
  position: absolute; /* Position them relative to the browser window */
  left: -80px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 15px; /* 15px padding */
  width: 100px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 20px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
  left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#about {
  top: 70px;
  background-color: #4CAF50;
}

#blog {
  top: 150px;
  background-color: #2196F3; 
}

#projects {
  top: 250px;
  background-color: #f44336;
}

#contact {
  top: 350px;
  background-color: #555 
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="admin_dashboard.php" id="about">Home</a>
  <a href="Add_services.php" id="blog">Add Services</a>
  <a href="Addcontact.php" id="projects">Edit Contacts</a>
  <a href="logout.php" id="contact">LogOut</a>
</div>
</body>
</html>