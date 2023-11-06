<?php

include("config.php");
include("user_info.php");

$assignment_id = $_GET['id'];

$assignment_sql = "SELECT * FROM asignment a
JOIN handout h ON a.asignment_id = h.asignment_id
WHERE a.asignment_id = $assignment_id;";
$assignment_result = $conn->query($assignment_sql);
$assignment_row = mysqli_fetch_assoc($assignment_result);


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDirectory = "files/";
    $fileName = $uploadDirectory . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileName)) {
        echo "File uploaded successfully. File path: " . $fileName;

        $file_sql = "INSERT INTO file (file_id, path) VALUES (NULL, '$fileName')";

        if ($conn->query($file_sql) === TRUE) {
            echo "Record saved into the table FILES successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $file_sql = "SELECT * FROM file WHERE path='$fileName'";
        $file_result = $conn->query($file_sql);
        $file_row = mysqli_fetch_assoc($file_result);

        $file_id = $file_row['file_id'];

        $handout_sql = "INSERT INTO handout (handout_id, file_id, comment_id, user_id, asignment_id, grade) 
        VALUES (NULL, $file_id, NULL, $user_id, $assignment_id, NULL)";

        if ($conn->query($handout_sql) === TRUE) {
            echo "Record saved into the table HANDOUT successfully.";
            //header("location: assignment.php?id=$assignment_id");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } else {
        echo "Error uploading the file.";
    }

} else {
    echo "Invalid request or no file uploaded.";
}

?>