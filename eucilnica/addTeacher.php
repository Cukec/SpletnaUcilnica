<?php

include("config.php");

$username = $_POST['regemail'];
$password = $_POST['regpass'];
$passwordConfirm = $_POST['regpassConfirm'];
$name = $_POST['name'];
$surname = $_POST['surname'];

$hash_pass = md5($password);

$username = $conn->real_escape_string($username);
$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);

if($result->num_rows === 0){

    if($password == $passwordConfirm){

        $sql_insert = "INSERT INTO user (name, surname, role, username, password) VALUES ('$name', '$surname', 't', '$username', '$hash_pass')";
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();

        if ($stmt->error) {
            die("Error: " . $stmt->error);
        }

        $stmt->close();
        header("location: admin.php");
        exit(); 

    }else{
        $error = "Pasword doesn't match!";
        header("location: admin.php?error=$error");
        exit();
    }
}else{
    $error = "This e-mail is already in use!";
    header("location: admin.php?error=$error");
    exit();
}

?>