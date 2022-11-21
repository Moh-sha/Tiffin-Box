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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>registration</title>

    <style>
      p {
        font-size: 100px;
        text-align: center;
      }
   
      a {
        text-decoration: none;
        color: blue;
      }
      div {
        padding: auto;
        text-align: center;
      }
      input[type="email"],
      [type="password"],
      [type="text"],
      [type="number"] {
        height: 25px;
        width: 100%;
      }
    </style>
  </head>

  <body>
    <p>Customer Registation</p>

    <div>
    <form action="validation.php" method="post">
      
        <fieldset>
          <label for="username">User name : </label>
          <input type="text" name="username" id="" />
          <br />
          <br />
          <label for="password">Password : </label>
          <input type="password" name="password" id="" />
          <br />
          <br />
          <label for="email">EmailAdress : </label>
          <input type="email" name="email" id="" />
          <br />
          <br />

      
       
          <br />
          <br />
          <input type="submit" value="submit" />
        </fieldset>
      
    </form>
    </div>
</body>
</html>