<?php include("config.php"); include("user_info.php");

if(isset($_GET['editid'])){
    $did = $_GET['editid'];

    $sql = "SELECT * FROM subject WHERE subject_id = $did";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if(isset($_POST['title'])){
    $title = $_REQUEST['title'];
    $sql = "UPDATE subject SET class_name = $title WHERE subject_id = $did";
    $result = mysqli_query($conn, $sql);
}

if(isset($_GET['editid'])){
    $did = $_GET['editid'];

    $sql = "SELECT * FROM subject WHERE subject_id = $did";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Subject</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home_page.css">
</head>
<body>
    <div class="navBar">
        <table>
            <tr>
                <td class="profilePic"><a href="#"><img src="#" height="20px" width="20px"></a></td>
                <td><a href="#">home</a></td>
                <td><a href="subjects.php">subjects</a></td>
                <td><a href="admin.php"><?php if($role == 'a') echo "admin" ?></a></td>
            </tr>
        </table>
    </div>
            <div class="card" style="margin: 50px"> 
                <h4 class="title">Edit subject</h4>
                <form method="post" action="">
                <div class="field">
                    <svg class="input-icon" viewBox="0 0 45.999 45.999" xmlns="http://www.w3.org/2000/svg">
                    <path d="M39.264,6.736c-8.982-8.981-23.545-8.982-32.528,0c-8.982,8.982-8.981,23.545,0,32.528c8.982,8.98,23.545,8.981,32.528,0
                    C48.245,30.281,48.244,15.719,39.264,6.736z M25.999,33c0,1.657-1.343,3-3,3s-3-1.343-3-3V21c0-1.657,1.343-3,3-3s3,1.343,3,3V33z
                    M22.946,15.872c-1.728,0-2.88-1.224-2.844-2.735c-0.036-1.584,1.116-2.771,2.879-2.771c1.764,0,2.88,1.188,2.917,2.771
                    C25.897,14.648,24.746,15.872,22.946,15.872z"></path></svg>
                    <input autocomplete="off" id="title" placeholder="<?php echo $row['class_name'] ?>" class="input-field" name="title" type="text" value="">
                </div>
                <button class="btn" type="submit">Edit</button>
                </form>
            </div>
</body>
</html>