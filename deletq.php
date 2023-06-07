<?php
include "db.connection.php";
if (isset($_GET['eq'])) {
    $id=$_GET['eq'];
    $sql="delete from `crud6` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
    header("Location:equ.php");
    }
   
   

}
?>