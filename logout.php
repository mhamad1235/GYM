<?php 
session_start();
unset($_SESSION['username']);
header("Location:Login2.php");

?>