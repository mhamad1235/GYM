
<?php 
session_start();

if(!isset($_SESSION['username'])){
  header("Location:Login2.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="me!.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{color:snow;}
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
<body>
<section id="mhamad">
<ul class="m112">

  <li class="l1"><a style="  text-decoration: none;"  href="trainer.php"><img class="home" src="gym1.jpg" alt="sory"</a></li>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="player.php">Player</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="plan.php">Plan</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="s.php">Supplament</a>
  <li style="position:relative; left: 200px;" class="vip"><a class="but" href="logout.php"><button class="signin">log out</button></a></li>
</ul>

<div class="mhamad">

<h1 style="font-family: 'Smooch Sans', sans-serif;
	font-weight: 500;
  -webkit-font-smoothing: antialiased; " align="center"  class="m11">Welcom <span style="color:#6495ED;"><?php echo $_SESSION['username']; ?></span> to the <b class="ma97">MA97</b> GYM</h1>
<h1 style="font-family: 'Smooch Sans', sans-serif;
	font-weight: 500;
  -webkit-font-smoothing: antialiased;"align="center" class="m11"><div class="a12">Don<sup>'</sup>t complain</div> <div class="a3">Enjoy the pain</div></h1>
</div>

</section>
</body>
</html>