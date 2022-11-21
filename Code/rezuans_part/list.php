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
    <title>Info</title>
   
  </head>
  <body>
    <div class="container">
      <h1>Info</h1>

      <br />
      <br />

      <?php 
         
    
     session_start();
          

     @$names = $_POST['names'];
    


         
    $info = " ".$names."|".$names."\r\n";
    $files = fopen('info.txt', 'a');
    fwrite($files, $info);
    
     echo readfile("info.txt","\r\n");



     
 ?>





       <br>
        
        
        
          <a href="Rider_Home.php">home</a> <button style="margin-left: 20px" type="submit">Edit</button>
    </div>

  </body>
</html>
