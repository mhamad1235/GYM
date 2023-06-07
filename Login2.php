    <?php 
session_start();
include "po.php";
include "coockie.php";
include "db.connection.php";
if (isset($_POST['submit'])) {
$name=$_POST['user'];
$ramz=$_POST['pass'];
$sql="SELECT * FROM crud2 WHERE name='$name' AND password='$ramz'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if ($num==1) {
    header("Location:website.php");
    $_SESSION['username']=$name;    
}elseif ($name=='mamosta' && $ramz==4556) {
    $_SESSION['username']=$name;  
    header("Location:trainer.php");
}
elseif ($name=='admin' && $ramz==4556) {
    $_SESSION['username']=$name;  
    header("Location:admin.php");
}
}
?>
<style>


</style>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/pnj" href="pop/klipartz.com (1).png">
    <link rel="stylesheet" href="Login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="bod">
<img src="back (2).jpg" width="600px" height="100%">
<form action="<?php  echo $_SERVER["PHP_SELF"];   ?>" class="box" method="post">
<h1>Login</h1>
<input type="text" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username'];}; ?>" name="user" placeholder="Username">
<span class="Er"> <?php echo $Euser; ?></span>
<input type="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];}; ?>" name="pass" placeholder="Password">
<span class="Er"><?php echo $Epass; "</br>" ?></span> <br> <br>
<a href=""><input class="sub" name="submit"  type="submit" value="Login"></a>  <a href="register.php"><input style="" value="sign up" class="sub" type="button"></a> 

<label for="re"><input id="re" name="check" type="checkbox"> <span class="rem" style="     color: white;
    text-transform: uppercase;
    font-weight: 400;
    transition: transform 1s ease-in-out forwards;
  
     
   
  ">remember me</span></label>

</form>

</body>
</html>