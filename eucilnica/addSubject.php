<?php

include("config.php");
include("user_info.php");

$title = $_POST['title'];

$sql = "SELECT * FROM subject WHERE class_name='$title'";
$result = $conn->query($sql);

if($result->num_rows === 0){

    $sql_insert = "INSERT INTO user (user_id, class_name) VALUES ('$user_id','$title')";
    $stmt = $conn->prepare($sql_insert);
    $stmt->execute();

}else{
    $error = "This subjet already exists!";
    header("location: admin.php?error=$error");
    exit();
}

?>