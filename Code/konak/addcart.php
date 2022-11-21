<?php 


  session_start();
   
  $username=$_POST['name'];
  $price=$_POST['price'];
  $quality=$_POST['qty'];
  
  


    $food=array($username,$price,$quality);
    print_r($food);





?>