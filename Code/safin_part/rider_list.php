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
    <title>Rider list</title>
    <style>
      .container {
        width: 500px;
        height: 500px;
        border: 1px solid #ccc;
        margin: 0 auto;
        text-align: center;
        background: beige;
      }
      a{
        font-size: large;
        color: tomato;
        text-decoration: none;
      }

      
      body{
             
             background-image: url(s.jpeg);
    
          }
          a{
        font-size: large;
        color: tomato;
        text-decoration: none;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <h1>Rider list</h1>

      <br />
      <br />

      <?php 
         
    
     session_start();
          

     @$names = $_POST['names'];
      @$address = $_POST['address'];
      @$emails   =$_POST['emails'];


         
    $rider = " ".$names."|".$address."|".$emails."\r\n";
    $files = fopen('rider.txt', 'a');
    fwrite($files, $rider);
    
     echo readfile("rider.txt","\r\n");



     
 ?>





       <br>
        
        
        
          <a href="home.php">home</a> <button style="margin-left: 20px" type="submit">Edit</button>
    </div>

  </body>
</html>
