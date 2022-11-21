<?php
if (!isset($_COOKIE['status'])) {
  header('location: login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD RIDER</title>

<style>
    
    .contains{
           
            background-color: azure;
            width: 500px;
            height: 500px;
           border: 1px solid #ccc;
           margin: 0 auto;
           text-align: center;
           }

           .input[submit]{
                 
             border: 1px solid #ccc;
                  border-radius: 5px;


           }
           a{
        font-size: large;
        color: tomato;
        text-decoration: none;
      }


      body{
             
         background-image:url(s.jpeg);
     
         

      }


</style>



</head>
<body>
        <div class ="contains">
         <h1>ADD RIDER <h1>  
         
         <form action="rider_list.php" method="post">
         <div>
          <label for="name">Name : </label>     
         <input type="text" name="names" id="">
         <br>
         <br>
          <label for="address">address :</label>
         <input type="text" name="address" id="">
         <br>
         <br>
         <label for="emails">Email  :</label> 
         <input type="email" name="emails" id="">   
         <br>
         <br>

         <hr>     
       
        

         </form>
          <br>
          <br>
        
         
        
        <input type="submit" value="submit"> <span>   </span> <a href="home.php">home</a>
        <br>
      </div>
     
       
        
        





       
</body>
</html>