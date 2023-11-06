<?php include("config.php"); include("user_info.php"); 

$query = "select * FROM user WHERE role = 's'";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home_page.css">
</head>
<body>
    <div class="navBar">
        <table>
            <tr>
                <td class="profilePic"><a href="#"><img src="#" height="20px" width="20px"></a></td>
                <td><a href="#">home</a></td>
                <td><a href="#">subjects</a></td>
                <td><a href="admin.php"><?php if($role == 'a') echo "admin" ?></a></td>
            </tr>
        </table>
    </div>
    <table align="center">
        <tr>
            <td>Student name</td>
            <td>Student surname</td>
            <td>Username</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <tr>
            <?php

                while ($row = mysqli_fetch_array($result)) {
                
            ?>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['surname'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><a href="editStudent.php?editid='<?php echo $row['user_id']?>'" class="btn">Edit</a></td>
                <td><a href="deleteStudent.php?deleteid='<?php echo $row['user_id']?>'" class="btn">Delete</a></td>

        </tr>
            <?php
                }
            ?>
    </table>
</body>
</html>