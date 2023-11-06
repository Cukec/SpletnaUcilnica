<?php
include("config.php");
include("user_info.php");

$sql_inserts;
$subject_id = $_GET['id'];
$title = $_POST['title'];

if(isset($_POST['description'])){
    $description = $_POST['description'];
}

if(isset($_FILES['gradivo'])){
    $uploadDirectory= "files/";
    $gradivoName = $uploadDirectory . basename($_FILES["gradivo"]["name"]);
    move_uploaded_file($_FILES["gradivo"]["tmp_name"], $gradivoName);

    $sql_inserts = "INSERT INTO asignment (title, description, path_gradivo, subject_id, teacher_id) VALUES ('$title', '$description', '$gradivoName', $subject_id, $user_id)";
    $stmt = $conn->prepare($sql_inserts);
        $stmt->execute();
        header("location: subjects.php?id=$subject_id");
        
}else{
    $sql_inserts = "INSERT INTO asignment (title, description, subject_id, teacher_id) VALUES ('$title', '$description', '$subject_id, '$user_id')";
    $stmt = $conn->prepare($sql_inserts);
        $stmt->execute();
        header("location: subjects.php");
}

?>
