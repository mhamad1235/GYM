<?php
include "db.connection.php";
include "po.php";
    if (isset($_POST['submit'])) {
        if(!empty($_POST['user11']) &&  
        !empty($_POST['type']) && 
        !empty($_POST['prise'])){ 
    $username=$_POST['user11'];
    $type=$_POST['type'];
    $prise=$_POST['prise'];
    $date = date('Y-m-d');
    $sql="INSERT INTO `crud5`( `name`, `type`, `prise`,`time`) VALUES ('$username','$type','$prise','$date')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:supp.php");
    }
            }
        else{
            $error="please fill all blank";   
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/pnj" href="pop/klipartz.com (1).png">
    <link rel="stylesheet" href="Login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
   
<img src="admin.png" width="300px" height="100%">
<form action="<?php  echo $_SERVER["PHP_SELF"];   ?>" class="box" method="post">
<h1>Add Supplament</h1>

<input type="text"  name="user11" placeholder="Name">
<span style="color:red; font-size:5px;"><?php if(isset($_POST['submit'])){
    echo $a;
} ?></span>
<input type="text"  name="type" placeholder="Type">
<input type="text"  name="prise" placeholder="Prise">
<p><?php echo $error; echo $var; ?></p>
<input class="sub" name="submit"  type="submit" value="Confirm"><br>




</form>

</body>
</html>