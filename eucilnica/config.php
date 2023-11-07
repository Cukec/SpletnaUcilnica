<?php
session_start(); 
$conn = mysqli_connect("localhost", "NejcGnilsek",",iXg93SvW`r8","classroom");
if (mysqli_connect_errno()) {
    echo "A problem has occured when connecting to the database: " . mysqli_connect_error();
    exit;
  }
mysqli_set_charset($conn,"utf8");  
?>