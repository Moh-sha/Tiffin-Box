<?php
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    
    



    if($username=="" || $password =="" || $email== ""){
        header('location: registration_1.php?err=null');
     
    }else{      
        $user = $username."|".$password."|".$email."\r\n";
        $file = fopen('user.txt', 'a');
        fwrite($file, $user);

        header('location: login.php');
    }

    setcookie('status', 'true', time() + 10003600, '/');

?>