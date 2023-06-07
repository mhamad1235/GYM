<?php
include "db.connection.php";
if (isset($_GET['deletid'])) {
    $id=$_GET['deletid'];
$course=$_POST['text2'];
    $sql="UPDATE `crud2` SET course='$course' WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
    header("Location:player.php");
    }
}
    
?>