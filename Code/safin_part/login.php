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
    <title>LOG IN</title>

<style>
         p {
        font-size: 100px;
        text-align: center;
      } 

      fieldset {
        background-color: white;
        display: inline-block;
        text-align: left;
        width: 25%;
      }
      div {
        padding: auto;
        text-align: center;
      }


              body{
                           background-image: url(p.jpeg);



              }


</style>

</head>
<body>
    

<div classs="hello">
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
      <input type="submit" value="submit">
     <hr>

     <a href="registation_1.php">Create New Account</a>
     <hr/>
     <hr/>
           <a href="../Master_Home.php">Go to Home Page</a>

</fieldset>






</form>
</div>
 
</div>



</body>
</html>
