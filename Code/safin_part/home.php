<?php
if (!isset($_COOKIE['status'])) {
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .mid {
        text-align: center;
        font-size: 100px;
      }

      .fieldset {
        display: inline-block;
        border: 5px solid;
      }
      body {
        background-image: url("images.png");
        background-size: cover;
      }
      .side {
        float: left;
      }

      a {
        font-size: large;
        color: tomato;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="mid">Welcome Tiffinbox</div>

    <div class="side">
     
      <a href="registation_1.php">Register New Admin</a>
      <hr />
      <a href="post.php">Upcomming Announcements</a>
      <hr />
      <a href="newsfeed.php">Admin newsfeed</a>
      <hr />
      <a href="add_rider.php">Add Rider</a>
      <hr />
      <a href="rider_list.php">Rider list</a>
      <hr />
      <a href="resturant_owner_list.php">Restaurant Owner list</a>
      <hr />
      <a href="add_resturant_owner.php">Add Restaurant Owner</a>
      <hr />
      
      <a href="Contact.php">Contact</a>
      <hr/>

    

      <a href="login.php ">Logout</a> &nbsp;

    </div>
  </body>
</html>
