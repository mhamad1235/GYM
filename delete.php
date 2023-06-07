<?php
include "db.connection.php";
if (isset($_GET['deletid'])) {
    $id=$_GET['deletid'];
    $sql="delete from `crud3` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
    header("Location:plan.php");
    }
   
   
}


?>