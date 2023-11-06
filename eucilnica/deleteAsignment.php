<?php
include("config.php");

$asignment_id = $_GET['id'];

$sql = "DELETE FROM asignment WHERE asignment_id = $asignment_id";
$stmt = $conn->prepare($sql);
header("location: subjects.php?id=$subject_id");
?>