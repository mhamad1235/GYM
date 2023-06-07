
<?php

include "db.connection.php";
$id = isset($_GET['cours']) ? $_GET['cours'] : '';
$mh="select course from   `crud2` where id=$id";
$mhamad=mysqli_query($con,$mh);
$R=mysqli_fetch_assoc($mhamad);
$C=$R['course'];

if(isset($_POST['submit'])){
$idd=$_POST['id'];
$course=$_POST['text2'];
    $sql="update `crud2` set course='$course'
     where id=$idd";
    $result=mysqli_query($con,$sql);
    if($result){
 header("Location:player.php");
}else{
    echo "no";
    
}

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
          .sub{
    color:wheat;
    position: relative;
    left:50px;
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

p{color:red;}
textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}
    table{color:snow;}
</style>
<body>
<section id="mhamad">
<ul class="m112">

  <li class="l1"><a style="  text-decoration: none;"  href="trainer.php"><img class="home" src="gym1.jpg" alt="sory"</a></li>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="player.php">Player</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="plan.php">Plan</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="s.php">Supplament</a>
</ul>
<div style="margin:auto; float:left;" class="mhamad">
   
    <form  method="post" action="<?php  echo $_SERVER["PHP_SELF"];   ?>">
    <textarea  placeholder="Sent a course" rows="20" 
    name="text2" id="comment_text" cols="30" 
    class="ui-autocomplete-input" autocomplete="off" 
    role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea> <br>
 <input name="submit" class="sub"  value="submit" type="submit">
 <input hidden   name="id" value="<?php echo $id;?>" type="text">

    </form>
</div>
<div id="textt" style=" backdrop-filter: blur(3px); font-size: 20px; float:right; color:#3498db; position:relative; top: 100px; right: 200px;
	 border-left:2px solid #3498db;border-right:2px solid #3498db;width: 400px; height: 400px;"> <h3 style="text-align:center;"> The last course</h3>  <br> <?php  if($C){echo $C;} else{
    echo "<p>No course yet!</p>";
} ?> </div>


</section>
</body>
</html>