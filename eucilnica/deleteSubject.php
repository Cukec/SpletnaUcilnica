<?php include("config.php"); include("user_info.php"); 

if(isset($_GET['deleteid'])){
    $did = $_GET['deleteid'];

    $query = "delete from subject where subject_id = $did";
    $result = mysqli_query($conn, $query);
    if($result){
        header("location: allSubjects.php");
    }else{
        header("location: allSubjects.php");
    }
}

?>