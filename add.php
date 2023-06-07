<?php
include "db.connection.php";
include "po.php";
    
    if (isset($_POST['submit'])) {
        if(!empty($_POST['user11']) &&  
        !empty($_POST['pass11']) && 
        !empty($_POST['pass111']) && 
        !empty($_POST['loc']) && 
        !empty($_POST['email']) && 
        !empty($_POST['phone']) ){ 
            if($_POST['pass11']==$_POST['pass111'] ){
    $username=$_POST['user11'];
    $password=$_POST['pass11'];
    $location=$_POST['loc'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date = date('Y-m-d', strtotime('+1 month'));
    $current=date("Y-m-d");
    $z=$date-$current;
   if($_POST['male']){
        $gender=$_POST['male'];}
      else{
        $gender=$_POST['female'];}
      
    $sql="INSERT INTO `crud2`( `name`, `password`, `location`, `phone_number`,`gender`,`time`) VALUES ('$username','$password','$location','$phone','$gender','$date')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:aplayer.php");
    }
            }else{$var="please check your password";}
        }else{
            $error="please fill all blank";
        
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
    <title>add</title>
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
<form action="add.php" class="box" method="post">
<h1>Add player</h1>

<input type="text"  name="user11" placeholder="Username">
<input type="password"  name="pass11" placeholder="Password">
<input type="password"  name="pass111" placeholder="Confirm password">
<span style="color:red; font-size:5px;"><?php if(isset($_POST['submit'])){
    echo $a;
} ?></span>
<input type="text"  name="loc" placeholder="Location">
<input type="text"  name="phone" placeholder="Phone number">
<input type="text"  name="email" placeholder="Email">
male :<label name="aa" for="i1"><input id="i1" type="radio" value="male"  name="male" placeholder="Password"></label>
female: <label name="aa" for="i2"><input  id="i2" type="radio" value="female"  name="female" placeholder="Password"></label>
 <br>
<p><?php echo $error; echo $var; ?></p>
<input class="sub" name="submit"  type="submit" value="Confirm"><br>




</form>

</body>
</html>