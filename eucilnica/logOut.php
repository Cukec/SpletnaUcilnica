<?php

include("config.php");
include("user_info.php");

session_destroy();
header("location: login.php");

?>