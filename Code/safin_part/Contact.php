<?php
if (!isset($_COOKIE['status'])) {
  header('location: login.php');
}
?>

<?php 
        session_start();
         
        @$username=$_POST["name"];

         @$email =$_POST["email"];
         @$subject=$_POST["subject"];
         @$message=$_POST["message"];
         
         $file=" ".$username."|".$email."|".$subject."|".$message."\r\n";
         $contact=fopen('contact.txt','a');
         fwrite($contact,$file);
        
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <style>
      input[textarea] {
        height: 25px;
        width: 100%;
      }
      .h1 {
        font-size: 100px;
      }
      a {
        font-size: large;
        color: tomato;
        text-decoration: none;
      }
      form {
        background-color: bisque;
      }
    </style>
  </head>
  <body>
    <h1>For Cantact Send Massage</h1>
    <form action="contact_box.php" method="post">
      <fieldset>
        <label for="name">Name :</label>
        <input type="text" name="name" id="" />
        <br />
        <br />
        <label for="email">Email :</label>
        <input type="email" name="email" id="" />
        <br />
        <br />
        <label for="subject">Submit :</label>
        <input type="text" name="subject" id="" />

        <br />
        <br />
        <label for="message">Message :</label>
        <input type="textarea" name="message" id="" />
        <br />
        <br />
        <input type="submit" value="Submit" /><span> </span>
        <a href="home.php">home</a>
      </fieldset>
    </form>
  </body>
</html>
