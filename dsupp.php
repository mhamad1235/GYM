<?php 
include "db.connection.php";
if (isset($_GET['supp'])) {
    $id=$_GET['supp'];
    $sql="delete from `crud5` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
    header("Location:supp.php");
    }
   
   

}
?>