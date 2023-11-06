<?php

include("config.php");
include("user_info.php");

$content = $_POST['content'];

$sql = "INSERT INTO reminders (reminder_id, user_id, content) VALUES (NULL,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user_id, $content);

if($stmt->execute()){
    echo "Success";
    header("location:homePage.php");
}else{
   echo "Problem";
}

?>