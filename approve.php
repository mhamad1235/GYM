<?php
include "db.connection.php";
error_reporting(E_ERROR);
$id = isset($_GET['deletid']) ? $_GET['deletid'] : '';
$mh="select * from  `register` where id=$id";
$mhamad=mysqli_query($con,$mh);
$R=mysqli_fetch_assoc($mhamad);
$C=$R['name'];
$C1=$R['password'];
$C2=$R['location'];
$C3=$R['phone number'];
$C4=$R['gender'];
$date = date('Y-m-d', strtotime('+1 month'));

$sql="INSERT INTO `crud2`(`name`, `password`, `location`, `phone_number`, `gender`, `time`) VALUES ('$C','$C1','$C2','$C3','$C4','$date')";
$result=mysqli_query($con,$sql);
if ($result) {
    header("Location:register2.php");
    $sqll="delete from `register` where id=$id";
    $result=mysqli_query($con,$sqll);
}

?>
