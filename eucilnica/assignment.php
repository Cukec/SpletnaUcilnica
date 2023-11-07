<?php

include("config.php");
include("user_info.php");

$assignment_id = $_GET['id'];


$sql = "SELECT * 
FROM handout h 
JOIN asignment a ON h.asignment_id = a.asignment_id 
WHERE a.asignment_id = $assignment_id AND h.user_id = $user_id";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);

$class_id = $row['subject_id'];

$subject_sql = "SELECT class_name FROM subject WHERE subject_id='$class_id'";
$subject_result = $conn->query($subject_sql);
$class_name = mysqli_fetch_assoc($subject_result);


if(isset($_GET['reminder'])){
    $reminder = $_GET['reminder'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assignment.css"/>
    <title>Assignment</title>
</head>
<body>
    <div class="content">
        <div class="assignments">
            <div class="assignment-preview">
                <div class="title"> <?php echo $row['title']; ?> </div>
                <div class="assignment-subject"><p><?php echo $class_name['class_name']; ?></p></div>
                <div class="description"><b>Description: </b><?php echo $row['description']; ?></div>
                <div class="description"><b>Handed in: </b>
                    <?php
                    
                    if($row['handout_id'] != NULL){

                        ?>
                        <svg fill="green" width="20px" height="20px" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" style="margin-top:4px;">
                        <title/>
                        <g>
                        <path d="M58.3945,32.1563,42.9961,50.625l-5.3906-6.4629a5.995,5.995,0,1,0-9.211,7.6758l9.9961,12a5.9914,5.9914,0,0,0,9.211.0059l20.0039-24a5.9988,5.9988,0,1,0-9.211-7.6875Z"/>
                        <path d="M48,0A48,48,0,1,0,96,48,48.0512,48.0512,0,0,0,48,0Zm0,84A36,36,0,1,1,84,48,36.0393,36.0393,0,0,1,48,84Z"/>
                        </g>
                        </svg>
                        <?php

                    }else{

                        ?>
                        <div style="padding-top:4px;">
                            <svg fill="red" width="20px" height="20px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <title>cross-round</title>
                            <path  d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path>
                            </svg>
                        </div>
                        <?php

                    }
                
                    ?>
                </div>
                <div id="drop-area">
                    <form action="upload.php?id=<?php echo urlencode($assignment_id); ?>&confirm=<?php if(isset($reminder)) echo urlencode($reminder); ?>" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file" id="file-input" class="hidden-input">
                    <label for="file-input" class="file-label">
                        Choose File
                    </label>
                    <input type="submit" class="submit-button" style="<?php echo "display: none;" ?>" value="GO">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>