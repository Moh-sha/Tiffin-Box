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
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Restaurant Owner list</h1>

      <br />
      <br />

      <?php 
         
    
      $username = $_POST['names'];
      $restaurant = $_POST['restaurant'];
      $email   =$_POST['emails'];

        $owners = "   ".$username."|".$restaurant."|".$email."\r\n";
        $files = fopen('owner.txt', 'a');
        fwrite($files, $owners);
         echo "<br>";
        
         echo readfile("owner.txt","\r\n");


       ?>
    </div>
  </body>
</html>
