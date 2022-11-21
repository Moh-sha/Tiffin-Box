<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header('location: log_in.php?err=null');
    }else{
        $file = fopen('user.txt', 'r');
        $status = false;
        while(!feof($file)){
            $data = fgets($file);
            $user = explode("|", $data);
            //print_r($user);
            if(trim($user[0]) == $username && trim($user[1]) == $password){
                setcookie('status', 'true', time()+3600, '/');
                $status = true;
            }
        }
        
        if($status){
            header('location: Rhome.php');
        }else{
            header('location: log_in.php?err=invalid');
        }

    }
?>