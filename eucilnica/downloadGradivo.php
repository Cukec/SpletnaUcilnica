<?php
$gradivo = $_GET['id'];

$file_name = basename($gradivo);  
     
// Use file_get_contents() function  
// to get the file from url and use  
// file_put_contents() function to  
// save the file by using base name  
if(file_put_contents( $file_name,  
      file_get_contents($gradivo))) {  
    echo "File downloaded successfully";  
}  
else {  
    echo "File downloading failed.";  
}


?>