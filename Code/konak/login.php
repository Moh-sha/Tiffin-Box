<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer LOG IN</title>

>

</head>
<body>
    

<div >
<form action="login_validation.php" method="post">
  
 <fieldset>
      <p>Log In </p>
      <hr>
     <label for="name">Username :</label>
     <input type="text" name="username" id="">
     <hr>
     <label for="password">Password :</label>
      <input type="password" name="password" id="">
      <hr>
      <a href="signup.php">Registration</a>
      <hr>
      <a href="../Master_Home.php">Home Page</a>
      <hr>
      
      <input type="submit" value="submit">
     <hr>

</fieldset>






</form>
</div>
 
</div>



</body>
</html>
