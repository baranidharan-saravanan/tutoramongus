<?php 
session_start();
session_destroy();
echo "<script>window.location.assign('signup.php')</script>";

?>