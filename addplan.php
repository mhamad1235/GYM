<?php
session_start();

if(!isset($_SESSION['username'])){
  header("Location:Login2.php");
}
include "db.connection.php";
if (isset($_POST['submit'])) {
  $plan=$_POST['text']; 
$sql="INSERT INTO `crud3`(`plan`) VALUES ('$plan')";
$result=mysqli_query($con,$sql);
if($result){
    header("Location:plan.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
    
<link href="https://mdbootstrap.com/docs/b4/jquery/forms/textarea/#basic" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="me!.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  
       .sub{
    color:wheat;
    padding: 10px 20px;
    border: 2px solid #3498db;
    background: none;
    backdrop-filter: blur(4.0px);
    -webkit-backdrop-filter: blur(4.0px);
    font-weight: bold;
    cursor: pointer;
    border-radius: 10px;
  
}
.sub:hover{    
    
    background: #18bd41;
   border: none;
    transition: 0.8s;
color: black;}
textarea {
  margin-top: 10px;
  margin-left: 50px;
  width: 500px;
  height: 100px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
  border-image: none;
  border-radius: 6px 6px 6px 6px;
  border-style: none solid solid none;
  border-width: medium 1px 1px medium;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
  color: #555555;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 1em;
  line-height: 1.4em;
  padding: 5px 8px;
  transition: background-color 0.2s ease 0s;
}


textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}
</style>
<body>
<section id="mhamad">
<ul class="m112">

  <li class="l1"><a style="  text-decoration: none;"  href="trainer.php"><img class="home" src="gym1.jpg" alt="sory"</a></li>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="player.php">Player</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="plan.php">Plan</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="s.php">Supplament</a>
</ul>

<div class="mhamad">
    <form  method="post" action="addplan.php">
    <textarea placeholder="Write your plan here" rows="20" 
    name="text" id="comment_text" cols="30" 
    class="ui-autocomplete-input" autocomplete="off" 
    role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea> <br>
    <input style="position:relative; left:50px;" class="sub" name="submit" type="submit">
    </form>
</div>
</section>
</body>
</html>