<?php include("config.php"); include("user_info.php"); 

if(isset($_GET['deleteid'])){
    $did = $_GET['deleteid'];

    $query = "delete from user where user_id = $did";
    $result = mysqli_query($conn, $query);
    if($result){
        header("location: allStudents.php");
    }else{
        header("location: allStudents.php");
    }
}

?>