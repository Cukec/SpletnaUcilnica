<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home_page.css">

    <?php include("user_info.php"); ?>

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
    <div class="content">
        <?php echo $name; ?>
    </div>
</body>
</html>