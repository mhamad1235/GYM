<?php
include "db.connection.php";
error_reporting(E_ERROR);
$id = isset($_GET['deletid']) ? $_GET['deletid'] : '';
$mh="select * from `crud2` where id=$id";
$mhamad=mysqli_query($con,$mh);
$row1=mysqli_fetch_assoc($mhamad);
$x=$row1['name'];
$x1=$row1['password'];
$x3=$row1['location'];
$x2=$row1['phone_number'];
$x4=$row1['time'];
    if (isset($_POST['submit'])) { 
        $idd=$_POST['idd']; 
    $username=$_POST['user11'];
    $password=$_POST['pass11'];
    $location=$_POST['loc'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];

    $sql="UPDATE `crud2` SET `name`='$username',`password`='$password',`location`='$location',`phone_number`='$phone',`time`='$date' WHERE id=$idd";
    $result=mysqli_query($con,$sql);
    if($result){
      header("Location:aplayer.php");
    }
        
        }
   
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/pnj" href="pop/klipartz.com (1).png">
    <link rel="stylesheet" href="Login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        .imgt{
            width: 120px;
            height: 120px;
            position: relative;
            right: 110px;
            bottom: 30px;
        }
        .p{
            position: relative;
            bottom: 100px;
        }
        .s2{
            position: relative;
            left: 300px;
            bottom: 500px;
        }
        .box{
    width: 800px;
    padding: 40px;
    position: relative;
    bottom:100px;
    left: 50%;
    transform: translate(-50%,-50%);
    background:rgba(19, 19, 19, 0.9) ;
    text-align: center;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.205);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.205);
    backdrop-filter: blur( 4.0px );
    -webkit-backdrop-filter: blur( 4.0px );
    border-radius: 10px;
    border: 1px solid rgba(30, 6, 68, 0.18);
}
        .box p{
    color: rgb(250, 6, 6);
    text-transform: uppercase;
    font-weight: 400;
    transition: transform 1s ease-in-out forwards;
}
.tname{
 
    position: relative;
    right: 80px;
    bottom:20px;
    color: snow;
    text-transform: uppercase;
    font-weight: 400;
    transition: transform 1s ease-in-out forwards;
}
.tp{
    position: relative;
    right: 80px;
}
.box:hover  p{
animation:left-to-right 1s ease-in-out infinite alternate;
}

    </style>
</head>
<body class="bod">
    
<img src="admin.png" width="400px" height="400px">
<form action="aupdate.php" class="box" method="post">
<h1>Update</h1>

<input type="text" value="<?php echo $x; ?>"  name="user11" placeholder="username">
<input type="text" value="<?php echo $x1; ?>"  placeholder="Password" name="pass11" >

<input type="text" value="<?php echo $x3; ?>"   placeholder="Location" name="loc">
<input type="text" value="<?php echo $x2; ?>"   placeholder="Phone" name="phone">
<input type="text" value="<?php echo $x4; ?>"   placeholder="Date" name="date">
<input  type="text" hidden style="border:none; display:none;"  value="<?php echo $id; ?>" name="idd">
<input class="sub" name="submit"  type="submit" value="Confirm"><br>

</form>

</body>
</html>