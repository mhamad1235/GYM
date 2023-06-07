<?php
include("db.connection.php");
$sql="SELECT  `message` FROM `message` WHERE 1";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$message=$row['message'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MA97  GYM</title>
  </head>
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="me2!.css">
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
      </section>
      <br>
      <section id="abo">
        <h1><span class="p1">The</span> <span class="p4">M</span> <span class="p2">eesage</span></h1>
        <br>
        <p><?php if($message){
          echo $message;
        }else{
          echo "No message yet!";
        } ?></p>
      </section>
      <footer id="end">
      <div style="color: #FF0000;" class="fot-name"><span class="final-ani" style="color:yellow;">MA97  </span>GYM</div>
      <table style="float:left;"class="final-tb">
      <tr>
        <td style=" color: #D3D3D3;font-size:25px;">GYM</td>
      </tr>

        <tr>
          <td><a href="me2!.html" style="text-decoration: none;color:snow; ">About us</a></td>   <td><a> <img class="m124" src="d (3).png" alt=""></a></td>  <td><a > <img class="m124" src="d (1).png" alt=""> </a></td>    <td><a>  <img class="m124" src="d (2).png" alt=""></a></td>
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
