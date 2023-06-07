<?php 
session_start();
include "db.connection.php";
if(!isset($_SESSION['username'])){
  header("Location:Login2.php");
}

$current=date("Y-m-d");
$b=$_SESSION['username'];
$x="select * from `crud2` where name='$b'";
$result=mysqli_query($con,$x);
if ($result) {
$r=mysqli_fetch_assoc($result);
$T=$r['time'];
$a=strtotime($T);
$o=floor($a/(60*60*24));
$aa=strtotime($current)+1;
$oo=floor($aa/(60*60*24));
$z=$a-$aa;
$z=floor($z/(60*60*24));
if($z==0 || $z<0){
  header("Location:Login2.php");
  echo '<script type="text/JavaScript"> 
     alert("visit your GYM holl ");
     </script>';
}
}else{echo "now";}
?>



<!DOCTYPE html>
<html lang="
" dir="ltr">
  <head>
    <link rel="stylesheet" href="t1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>MA97 GYM</title>
  </head>
<style>
  .w{
    position: relative;
  

  }
</style>
    <link rel="icon" href="favicon.ico">
  <body>
    <section id="mhamad">

      <ul class="m112">

      <li class="l1"><a style=" font-family: 'Smooch Sans', sans-serif; text-decoration: none;"  href="website.php"><img class="home" src="gym1.jpg" alt="sory"</a></li>
      <li class="vip"><a style="font-family: 'Smooch Sans', sans-serif;  text-decoration: none;"  class="active2" href="t1.php">Course</a>
  

      </li>
      <li ><a style=" font-family: 'Smooch Sans', sans-serif; text-decoration: none;" class="active1" href="me!4.html">Contact</a></li>


      <li class="vip" ><a style="font-family: 'Smooch Sans', sans-serif; text-decoration:none;" class="active" href="me2!.php">Message</a></li>
          <li><a style="font-family: 'Smooch Sans', sans-serif;  text-decoration: none;"  class="active2" href="me!3.html">News</a></li>


    </ul>
    <br>
    <h1 class="w">Your Course</h1>
    <?php 
include "db.connection.php";
$a=$_SESSION['username'];
$sql="SELECT course FROM `crud2` where name='$a'";
$result=mysqli_query($con,$sql);
if($result){
$row=mysqli_fetch_assoc($result); 
    $course=$row['course'];
   echo '<div  style="color:white; font-family: Muli, sans-serif;
   -webkit-font-smoothing: antialiased;
   font-smoothing: antialiased;
   margin-left:30px;
   margin-top:120px;

 
   ">
    
    <p style="color:#6495ED; font-size:18px;">'.$course.'</p></div>';
    }

?>
    <br>

    
    <footer id="end" style="position: relative; top:620px;">
    <div style="color: #FF0000;" class="fot-name"><span class="final-ani" style="color:yellow;">MA97  </span>GYM</div>
    <table style="float:left;"class="final-tb">
    <tr>
      <td style=" color: #D3D3D3;font-size:25px;">GYM</td>
    </tr>

      <tr>
        <td><a href="me2!.php" style="text-decoration: none;color:snow; ">About us</a></td>   <td><a> <img class="m124" src="d (3).png" alt=""></a></td>  <td><a > <img class="m124" src="d (1).png" alt=""> </a></td>    <td><a>  <img class="m124" src="d (2).png" alt=""></a></td>
      </tr>
      <tr>
        <td><a href="me!4.html" style="text-decoration: none; color:snow;">Contact us</a></td>
      </tr>
    </table>
    <table style="float:right; margin-right:10%;">
      <tr>
        <td style=" color: #D3D3D3;font-size:25px;">our serving</td>

      </tr>
      <tr>
          <td><a href="#training" style="text-decoration: none;color:snow; ">Training</a></td>

      </tr>
      <tr>
        <td><a href="me!3.html" style="text-decoration: none;color:snow; ">News</a></td>

      </tr>
    </table>
    </footer>
    <div style="height:15px;">

    </div>
  </body>
</html>
