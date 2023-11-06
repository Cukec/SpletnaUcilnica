<?php

include("config.php");
include("user_info.php");

$title = $_POST['title'];

$sql = "SELECT * FROM subject WHERE class_name='$title'";
$result = $conn->query($sql);

if($result->num_rows === 0){

    $sql_insert = "INSERT INTO subject (subject_id, class_name) VALUES (null, '$title')";
    $stmt = $conn->prepare($sql_insert);
        $stmt->execute();

    $result = $stmt->close();
    header("location: admin.php");
    exit();

}else{
    $error = "This subjet already exists!";
    header("location: admin.php?error=$error");
    exit();
}

?>