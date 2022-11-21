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
        background-image: url("re.jpg");
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
    <div style="color:white;" class="mid">Welcome Resturant Owner</div>

    <div class="side">
     
      
      <a href="add_menu.php">Add Menu</a>
      <hr />
      <a href="menu.php">Show Menu</a>
      <hr />
      <a href="UpdatePrice.html">Update Price</a>
      <hr />
      <a href="discount.php">Discount</a>
     
      <hr />
      <a href="Restaurent.php">Order Details</a>
      <hr />
      <a href="accept_reject.php">Accept/Reject Order</a>
      <hr />
     
      
      <a href="Contact.php">Contact</a>
      <hr/>
      <a href="../Master_Home.php ">Logout</a> &nbsp;

    </div>
  </body>
</html>
