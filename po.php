<?php 
include "db.php";

error_reporting(E_ERROR);
$name=$_POST['user'];
$ramz=$_POST['pass'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
$Euser=$Epass=$Eloc=$Emob="";

if (empty($name)  ) {
  $Euser="username is required";  
}
if (empty($ramz)) {
    $Epass="password is required";  
  }
   
}?>