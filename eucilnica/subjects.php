<?php include("config.php"); include("user_info.php");

$sql = "SELECT * FROM teacher_subject WHERE user_id = $user_id";
$result = mysqli_query($conn,$sql);

/*while($row = mysqli_fetch_array($result)){
    $sql1 = "SELECT class_name FROM subject WHERE subject_id = $row[subject_id]";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1);

    echo "$row1[class_name]";
}*/

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
        <h3>Your Subjects:</h3>
        <?php
        while($row = mysqli_fetch_array($result)){
        ?>
        <a href="#"><?php
        
        $sql1 = "SELECT * FROM subject WHERE subject_id = $row[class_name]";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result1);
        echo $row1['class_name'] ?></a>
        <?php
        }
        ?>
    </div>
</body>
</html>