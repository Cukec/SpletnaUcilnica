<?php

include("config.php");
include("user_info.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "files/";
    $uploadedFiles = [];

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $file_sql = $conn->prepare("INSERT INTO file (file_id, path) VALUES (NULL,?)");
    echo "1";

    foreach ($_FILES["files"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmpName = $_FILES["files"]["tmp_name"][$key];
            $fileName = basename($_FILES["files"]["name"][$key]);
            $uploadPath = $uploadDir . $fileName;

            move_uploaded_file($tmpName, $uploadPath);
            $uploadedFiles[] = $fileName;

            //Insert file into file table
            $file_sql->bind_param("s", $uploadPath);
            $file_sql->execute();

            echo "1";

            if ($file_sql->errno) {
                echo "Error: " . $file_sql->error;
            } else {
                echo "File inserted successfully!";
            }

            /*Get the inserted file id
            $get_file_sql = "SELECT * FROM file WHERE path='$uploadPath'";
            $file_result = $conn->query($get_file_sql);
            $file_row = mysqli_fetch_assoc($file_result);

            $file_id = $file_row['file_id'];

            //Insert file into handout
            $handout_sql = "INSERT INTO handout (handout_id, file_id, comment_id, user_id, grade) VALUES (NULL, '$file_id', NULL, '$user_id', NULL);
            $handout_stmt = $conn->prepare($handout_sql);
            $handout_stmt->execute();
            */
        }
    }
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    echo json_encode(["message" => "Files uploaded successfully", "files" => $uploadedFiles]);
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode(["error" => "Invalid request method"]);
}
?>