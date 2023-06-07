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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MA97  GYM</title>
    <link rel="stylesheet" href="me!.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.ico">
</head>
  </head>
  <style>
body{color:black;
      font-family: 'Smooch Sans', sans-serif;}
    p{font-size: 15px;
      color:black;
      font-family: 'Smooch Sans', sans-serif;
      
    }
    li{
      color:black;
      font-family: 'Smooch Sans', sans-serif;
    }
  .signin{   font-family: 'Smooch Sans', sans-serif;
  color:black;
  font-weight: 1000;
}
    
  </style>
  <body >
<section id="mhamad">

  <ul class="m112">

  <li class="l1"><a style="  text-decoration: none;"  href="website.html"><img class="home" src="gym1.jpg" alt="sory"</a></li>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="t1.php">Course</a>


  </li>
  <li ><a style="  text-decoration: none;" class="active1" href="me!4.html">Contact</a></li>


  <li class="vip" ><a style=" text-decoration:none;" class="active" href="me2!.php">Message</a></li>
      <li><a style="  text-decoration: none;"  class="active2" href="me!3.html">News</a></li>
      <li><a class="but" href="logout.php"><button class="signin">log out</button></a></li>

</ul>




  <br>


        <div class="mhamad">

<h1 style="font-family: 'Smooch Sans', sans-serif;
	font-weight: 500;

" align="center"  class="m11">Welcom <span style="color: #6495ED;"><?php echo $_SESSION['username']; ?></span> to the <b class="ma97">MA97</b> GYM</h1>
<h1 style="font-family: 'Smooch Sans', sans-serif;" align="center" class="m11"><div class="a12">Don<sup>'</sup>t complain</div> <div class="a3">Enjoy the pain</div>
you have <?php echo '<b class="ma97">'.$z.'</b>';  ?> day
</h1>




</div>



<div class="bosh">

</div>




        



         </section>

        <section id="icon" style="background-color:#FFF0F5">
          <h1 style="color:#6495ED;" class="lo">No Judgments are the Best Kind</h1>
          <table>
            <tr>
              <td><img class="kk"src="hata.png" alt=""></td> <td>
              <img class="kk1"src="absd.png" alt=""></td> <td><img class="kk2"src="absde.png" alt=""></td>
            </tr>
            <tr class="a">
              <td ><h1><b>POSITIVITY</b></h1> <p>We are nurturers: we seek only <br>to encourage, entertain, and empower.</p></td> <td><h1><b>INCLUSIVITY</b></h1><p>Here we keep open minds. There is no one <br>type or way in our diverse community.<br> Come as you are!</p></td> <td><h1><b>FUN</b></h1> <p>We know serious fitness is hard, but that <br>doesn’t mean it can’t be an edge-of-your-<br>seat, can’t-get-enough, look-forward-to<br>-your-workouts party.</p></td>
            </tr>
          </table>


</section>







<section class="rony">
  <h1  style="color:#6495ED;" class="lo">ronnie coleman</h1>
  <p  style="color:#6495ED;" class="lo"> you know him?</p>
<img class="uui" src="br.jpg" alt="">
<h1  style="color:#6495ED;" class="wwe">Ronnie Dean Coleman</h1>
<br>
<br><br>
<p class="wwee">s an American retired professional bodybuilder. The winner of the Mr. Olympia title for eight years in a row,<br> he is regarded as one of the greatest bodybuilders of all time<br>. Alongside his eight Mr. Olympia wins, he held the record for most wins as an IFBB professional with 26 titles until it was broken by Dexter Jackson.</p>

<h1  style="color:#6495ED;" class="wwe">Early life</h1>
<br>
<br>
<br>
<p class="wwee">Ronnie Dean Coleman was born in Monroe, Louisiana, on May 13, 1964.<br> He graduated cum laude from Grambling State University in 1984 with a BSc in accounting.<br> While there, he played football as a middle linebacker with the GSU Tigers under coach Eddie Robinson. After graduation, he failed to find work as an accountant and instead went to work at Domino's Pizza<br>, where he would eat the complimentary pizza every day due to being so poor that he could barely afford to eat outside of work.He then became a police officer in Arlington, Texas, serving as an officer from 1989 to 2000 and a reserve officer until 2003</p>
</section>
<section id="mr">
<h1  style="color:#6495ED;" class="mrh">Mr. Olympia</h1>
<p class="mrp">Mr. Olympia is the title awarded to the winner of the professional men's bodybuilding contest at Joe Weider's Olympia Fitness & Performance Weekend—an international bodybuilding competition that is held annually by the International Federation of BodyBuilding & Fitness (IFBB).[1] Joe Weider created the contest to enable the Mr. Universe winners to continue competing and to earn money. The first Mr. Olympia was held on September 18, 1965, at the Brooklyn Academy of Music, New York City, with Larry Scott winning his first of two straight titles.

The record number of wins is eight each by Lee Haney (1984–1991) and Ronnie Coleman (1998–2005). Big Ramy currently holds the title.

The film Pumping Iron (1977) featured the buildup to the 1975 Mr. Olympia in Pretoria South Africa and helped launch the acting careers of Arnold Schwarzenegger and Lou Ferrigno.

There is also a female bodybuilder crowned, Ms. Olympia, as well as winners of Fitness Olympia and Figure Olympia for fitness and figure competitors. All four contests occur during the same weekend. From 1994 to 2003, and again in 2012, a Masters Olympia was also crowned.

Starting in 2016, a new division called Classic Physique was introduced. Danny Hester was the inaugural champion in Classic Physique division.

Starting in 2019, a new division called Wheelchair Olympia was added</p>

    <img style="width:23%; margin-left:50px;" class="legend" src="arnold.jpg" alt="">
<img  style="width:23%"  class="legend" src="ramyy.jpg" alt="">
<img   style="width:23%" class="legend" src="phile.jpg" alt="">
<img   style="width:23%" class="legend" src="jay.jpg" alt="">
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
