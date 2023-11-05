<?php 
    
    if(empty($_SESSION) == false){
        $name = $_SESSION['user_name'];
        $surname = $_SESSION['user_surname'];
        $role = $_SESSION['user_role'];
        $user_id = $_SESSION['user_id'];
    }else{
        header('location: login.php');
    }

?>