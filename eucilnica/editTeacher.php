<?php include("config.php"); include("user_info.php");

if(isset($_GET['editid'])){
    $did = $_GET['editid'];

    $sql = "SELECT * FROM user WHERE user_id = $did";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if(isset($_POST['regemail'])){
    $regemail = $_REQUEST['regemail'];
    $sql = "UPDATE user SET username = '$regemail' WHERE user_id = $did";
    $result = mysqli_query($conn, $sql);
}

if(isset($_POST["name"])){
    $name = $_REQUEST["name"];
    $sql = "UPDATE user SET name = '$name' WHERE user_id = $did";
    $result = mysqli_query($conn, $sql);
}

if(isset($_POST["surname"])){
    $surname = $_REQUEST["surname"];
    $sql = "UPDATE user SET surname = '$surname' WHERE user_id = $did";
    $result = mysqli_query($conn, $sql);
}

/*if(isset($_POST["oldpass"])){
    $oldpass = $_REQUEST["oldpass"];
    $hashed_oldpass = md5($oldpass);

    $sql = "SELECT * FROM user WHERE user_id = '$did' AND password = '$hashed_oldpass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $regpass = $_REQUEST["regpass"];
        $regpassConfirm = $_REQUEST["regpassConfirm"];

        if($regpass == $regpassConfirm && $regpass != '' && $regpass != $oldpass){
            $regpass_hashed = md5($regpass);
            $sql = "UPDATE user SET password = '$regpass_hashed' WHERE user_id='$did'";
        }
    }
}*/


if(isset($_GET['editid'])){
    $did = $_GET['editid'];

    $sql = "SELECT * FROM user WHERE user_id = $did";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}


$sql = "SELECT * FROM subject";
$result1 = mysqli_query($conn, $sql);



if(isset($_POST["subject"])){

    $name = $_POST['subject'];

    $sql2 = "DELETE FROM teacher_subject WHERE user_id = $did";
                mysqli_query($conn, $sql2);

    foreach($name as $subject){

       $sql = "INSERT INTO teacher_subject (user_id, subject_id) VALUES ($did, $subject)";
       mysqli_query($conn,$sql);
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
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
                <h4 class="title">Edit teacher</h4>
                <form method="POST" action="">
                    <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"></path></svg>
                        <input autocomplete="off" id="logemail" placeholder="" class="input-field" name="regemail" type="email" value="<?php echo $row['username'] ?>">
                    </div>
                    <div class="field">
                    <svg class="input-icon" viewBox="0 0 45.532 45.532" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
                        S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
                        c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
                        c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
                        c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path></svg>
                        <input autocomplete="off" id="name" placeholder="" class="input-field" name="name" type="text" value="<?php echo $row['name'] ?>">
                    </div>
                    <div class="field">
                    <svg class="input-icon" viewBox="0 0 45.532 45.532" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
                        S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
                        c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
                        c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
                        c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path></svg>
                        <input autocomplete="off" id="surname" placeholder="" class="input-field" name="surname" type="text" value="<?php echo $row['surname'] ?>">
                    </div>
                    <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
                        <input autocomplete="off" id="logpass" placeholder="Old Password" class="input-field" name="oldpass" type="password" >
                    </div>
                    <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
                        <input autocomplete="off" id="logpass" placeholder="Password" class="input-field" name="regpass" type="password" >
                    </div>
                    <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
                        <input autocomplete="off" id="logpassConfirm" placeholder="Confirm password" class="input-field" name="regpassConfirm" type="password" >
                    </div>
                    
                    <button class="btn" type="submit">Edit</button>
                </form>
            </div>
            <div class="card" style="margin: 50px">
                <h4 class="title">Subjects</h4>
                <form action="" method="post">
                    <?php

                        while($row1 = mysqli_fetch_array($result1)){

                    ?>

                    <input type="checkbox" name="subject[]" value="<?php echo $row1['subject_id']?>" <?php 
                    
                    $sql = "SELECT * FROM teacher_subject WHERE user_id = $did AND subject_id = $row1[subject_id]";
                    $result2 = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result2) > 0){
                        echo "checked";
                    }

                    ?>>
                    <label for="<?php echo $row1['class_name']?>"><?php echo $row1['class_name']?></label><br>
                    <?php
                        }
                    ?>

                    <button class="btn" type="submit">Save</button>

                </form>
            </div>
</body>
</html>