<?php include("config.php"); include("user_info.php");

if(isset($_GET['id'])){
    $sid = $_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home_page.css">
</head>
<body>
    <div class="navBar">
        <table>
            <tr>
                <td class="profilePic"><a href="#"><img src="#" height="20px" width="20px"></a></td>
                <td><a href="homePage.php">home</a></td>
                <td><a href="subjects.php">subjects</a></td>
                <td><a href="admin.php"><?php if($role == 'a') echo "admin" ?></a></td>
            </tr>
        </table>
    </div>
    <div>
        <?php
        if($role == 't'){
            include('addAsignment.php');
        }
        ?>
    </div>
    <div class="assignments">
        <?php /*
        
        $sql = "SELECT * FROM asignment WHERE subject_id = $sid";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            

            for($i = 0; $i < $result->num_rows; $i++){
                $row = mysqli_fetch_assoc($result);
                $class_id = $row['subject_id'];
                $assignment_id = $row['asignment_id'];
                
                $sql = "SELECT class_name FROM subject WHERE subject_id='$class_id'";
                $result2 = $conn->query($sql);
                $class_name = mysqli_fetch_assoc($result2);
                ?>
                
                    <div class="assignment-preview">
                        <div class="title"> <?php echo $row['title']; ?> </div>
                        <div class="assignment-subject"><p><?php echo $class_name['class_name']; ?></p></div>
                        <div class="description"><b>Description: </b><?php echo $row['description']; ?></div>
                        <a href="assignment.php?id='<?php echo urlencode($assignment_id); ?>'" class="action-button">View Assignment</a>
                    </div>
                
            <?php

            }
        }
*/
        ?>
    </div>
</body>
</html>