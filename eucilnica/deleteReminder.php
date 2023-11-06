<?php 

include("config.php");

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM reminders WHERE reminder_id= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if($stmt->execute()){
    echo "Deleted";
    header("location:homePage.php");
}else{
    echo "Problem";
}

?>