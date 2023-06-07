<?php
include "db.connection.php";
if (isset($_GET['deletid'])) {
    $id = isset($_GET['deletid']) ? $_GET['deletid'] : '';
    $sql="delete from `register` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      header("Location:register2.php");
    }
   
   

}


?>
