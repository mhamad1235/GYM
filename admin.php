<?php
include "db.connection.php";
session_start();

if(!isset($_SESSION['username'])){
  header("Location:Login2.php");
}
$x="select * from `crud2` where gender='male'";
$xx=mysqli_query($con,$x);
$xxx=mysqli_num_rows($xx);
$y="select * from `crud2` where gender='female'";
$yy=mysqli_query($con,$y);
$yyy=mysqli_num_rows($yy);
$sql="select id from `crud2`";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
$sql2="select id from `crud5`";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_num_rows($result2);
$q="select id from `register`";
$w=mysqli_query($con,$q);
$e=mysqli_num_rows($w);
$sql3="select id from `crud6`";
$result3=mysqli_query($con,$sql3);
$row3=mysqli_num_rows($result3);
$query = "SELECT * FROM `crud5`";
$query_run = mysqli_query($con,$query);

$qty= 0;
while ($num = mysqli_fetch_assoc ($query_run)) {
    $qty += $num['prise'];
}
$sql1 = "SELECT * FROM `crud6`";
$query_run1 = mysqli_query($con,$sql1);

$qty1= 0;
while ($num1 = mysqli_fetch_assoc ($query_run1)) {
    $qty1 += $num1['prise'];}
  


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="C:\wamp64\www\w\jquery-3.6.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

$(document).ready(function(){
        $("#set").on('click',function(){
$('#oo').toggle(1000);
$('#ooo').toggle(1000);
        });
        
});
$(document).ready(function(){
         $("#oo").hide();
         $("#ooo").hide();
         $("#add").hide();
         $("#sh").hide();
         $("#addd").hide();
         $("#shh").hide();
         $("#x").hide();
         $("#y").hide();
         
         })

    $(document).ready(function(){
        $("#pp").on('click',function(){
$('#sh').toggle(1000);
$('#add').toggle(1000);
        });
        
});

$(document).ready(function(){
        $("#ppp").on('click',function(){
$('#shh').toggle(1000);
$('#addd').toggle(1000);
        });
        
});
$(document).ready(function(){
        $("#pppp").on('click',function(){
$('#x').toggle(1000);
$('#y').toggle(1000);
        });
        
});
function A(){
    document.getElementById('bod').style.fontSize="19px"
}
function a(){
    document.getElementById('bod').style.fontSize="10px"
}
function d(){
    document.getElementById('bod').style.fontSize="15px"
}
function dark(){
    document.getElementById('bod').style.backgroundColor="black"
}
function light(){
    document.getElementById('bod').style.backgroundColor="white"
}
function hide(){
    $(document).ready(function(){
    $("#oo").hide(1000);
            $("#ooo").hide(1000);

})
}

</script>
    <style>
        *{margin:0;
        }
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
body{margin-top:20px;  }
.container{
    position: relative;
    right: 40px;
}
.sub{
   
    color:wheat;
    padding: 5px 10px;
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
.fa-fw {width: 2em;}
.iu{position: relative;
    top:11px;
    font-family: 'Smooch Sans', sans-serif;
    font-weight: bold;
color:black;
    text-align: center;
  font-size:20px;
}
.col-md-9 {
    font-family: 'Smooch Sans', sans-serif;
    font-weight: bold;
color:#0072ff;
  font-size:19px;
}
.d1{   
    box-shadow: 5px 15px 60px 30px rgba(20,20,20,0.4);
    margin-left:13%;
float:left;
    border-radius:50%; 
     overflow: hidden;
    width:190px;
    height: 200px;
    background: linear-gradient(110deg, #73C8A9 60%, #373B44 60%);

    position: relative;
    left: 10px;
    top: 10px;

}
.d2{box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
    margin:auto;
    float:left;
    display: inline;
    border-radius:50%; 
     overflow: hidden;
    width:290px;
    height: 300px;
    background: linear-gradient(0.25turn, #00c6ff, #0072ff);

    position: relative;
    left: 10px;
    top: 10px;
}
.d11{   
    box-shadow: 5px 15px 60px 30px rgba(20,20,20,0.4);
    margin-left:13%;
float:left;
    border-radius:50%; 
     overflow: hidden;
    width:190px;
    height: 200px;
    background: linear-gradient(110deg, #73C8A9 60%, #373B44 60%);

    position: relative;
    left: 10px;
    top: 10px;

}
.d22{
 
    box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
    margin:auto;
    float:left;
    display: inline;
    border-radius:50%; 
     overflow: hidden;
    width:290px;
    height: 300px;
    background: linear-gradient(0.25turn, #00c6ff, #0072ff);
    position: relative;
    left: 20px;
    top: 10px;
}
.d111{   
    box-shadow: 5px 15px 60px 30px rgba(20,20,20,0.4);
    margin-left:13%;
float:left;
    border-radius:50%; 
     overflow: hidden;
    width:190px;
    height: 200px;
    background: linear-gradient(110deg, #73C8A9 60%, #373B44 60%);
    position: relative;
    left: 10px;
    top: 10px;

}
span{
    color:black;
    font-weight: bold;
    font-size: 35px;

}

.d222{
 overflow: hidden;
    box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
    margin:auto;
    float:left;
    display: inline;
    border-radius:50%; 
     overflow: hidden;
    width:290px;
    height: 300px;
    background: linear-gradient(0.25turn, #00c6ff, #0072ff);
    position: relative;
    left: 30px;
    top: 10px;
}
.ii{
 border-radius:50%;
    margin-left:25%;
    margin-top:20%;
 
}
.po{
    text-align:center;
 }
 .mh{
     font-size:12px;
     text-align:center;
     
 }
 {
     color:red;
 }

 .test{
    
    
 }

.sub{
    color:#0072ff;
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
    color:black;
    background: #18bd41;
    transition: 0.8}
    .col-md-9 {
      
    }
    .btn {
        height: 40px;
        width: 40px;
  background: #00c6ff ;
  background-image: -webkit-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: -moz-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: -ms-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: -o-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: linear-gradient(to bottom, #0d6eff, #00c6ff);
  border-radius:50%;
  
  -webkit-box-shadow: 0px 1px 16px #666666;
  -moz-box-shadow: 0px 1px 16px #666666;
  box-shadow: 0px 1px 16px #666666;
  font-family: Georgia;
  color: #ffffff;
  font-size: 5px;
  
 
  border: solid #000dff 0px;
  text-decoration: none;
}

.btn:hover {
    
  background: #040608;
  background-image: -webkit-linear-gradient(top, #040608, #3498db);
  background-image: -moz-linear-gradient(top, #040608, #3498db);
  background-image: -ms-linear-gradient(top, #040608, #3498db);
  background-image: -o-linear-gradient(top, #040608, #3498db);
  background-image: linear-gradient(to bottom, #040608, #3498db);
  text-decoration: none;
}
.btn1 {height: 40px;
        width: 40px;
  background: #00c6ff;
  background-image: -webkit-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: -moz-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: -ms-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: -o-linear-gradient(top, #0d6eff, #00c6ff);
  background-image: linear-gradient(to bottom, #0d6eff, #00c6ff);
  
  border-radius:50%;
  -webkit-box-shadow: 0px 1px 16px #666666;
  -moz-box-shadow: 0px 1px 16px #666666;
  box-shadow: 0px 1px 16px #666666;
  font-family: Georgia;
  color: #ffffff;
  font-size: 15px;

  border: solid #000dff 0px;
  text-decoration: none;
}

.btn1:hover {
  background: #709bc7;
  background-image: -webkit-linear-gradient(top, #709bc7, #f9fbfc);
  background-image: -moz-linear-gradient(top, #709bc7, #f9fbfc);
  background-image: -ms-linear-gradient(top, #709bc7, #f9fbfc);
  background-image: -o-linear-gradient(top, #709bc7, #f9fbfc);
  background-image: linear-gradient(to bottom, #709bc7, #f9fbfc);
  text-decoration: none;
}
    </style>

</head>



    <body id="bod">
        <nav>
 </i ><img style="width: 40px; border-radius:50%; position:relative; left: 15px; bottom:9px;" src="pp.jpg" alt=""> 
 <a ><i class="fa fa-pencil fa-fw"></i></a> <button style="position:relative;left:250px; bottom:7px;" class="btn" onclick="dark()"><img width="20px" height="20px" src="night-mode.png" alt=""></button>
 <a ><i class="fa fa-pencil fa-fw"></i></a> <button style="position:relative;left:250px; bottom:7px;" class="btn1" onclick="light()"><img width="20px" height="20px" src="brightness.png" alt=""></button>
        <a href="logout.php"><button class="sub" style="position:relative;left: 940px; bottom:7px; ">logout</button></a>
        <div style="position:relative; top: 176px; margin-left:15px; font-size:11px; color:red;"><?php if($e){echo $e;}else{
            
        } ?></div>        
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                <li></li>
                    <li class="active"><a href="admin.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
                    <ul  class="nav nav-pills nav-stacked">
                    <li  onclick="jkk()" id="pp"><a href="#"><i class="fa fa-list-alt fa-fw"></i>Player</a></li>
                    <li  class="mh" onclick="hide()" id="sh"> <a href="aplayer.php"><i class="fa fa-list-alt fa-fw"></i>View player</a></li>
                    <li  class="mh"   onclick="hide()" id="add"><a href="add.php"><i class="fa fa-list-alt fa-fw"></i>Add player</a></li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked">
                    <li onclick="supp()" id="ppp"><a href="#><i class="fa fa-file-o fa-fw" ></i>Supplament</a></li>
                    <li  class="mh"  onclick="hide()" id="shh"> <a href="supp.php"><i class="fa fa-list-alt fa-fw"></i>View supplament</a></li>
                    <li  class="mh"  onclick="hide()" id="addd"><a href="adds.php"><i class="fa fa-list-alt fa-fw"></i>Add supplament</a></li>
                    </ul>

                    <ul class="nav nav-pills nav-stacked">
                    <li onclick="equ()" id="pppp"><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Equipment</a></li>
                    <li  class="mh"  onclick="hide()" id="x"> <a href="equ.php"><i class="fa fa-list-alt fa-fw"></i>View equipment</a></li>
                    <li  class="mh"  onclick="hide()" id="y"><a href="addQ.php"><i class="fa fa-list-alt fa-fw"></i>Add equipment</a></li>
                    </ul>
                   
                    <li><a href="register2.php"><i class="fa fa-table fa-fw"></i>Register</a></li> 
                    <li><a href="message.php"><i class="fa fa-table fa-fw"></i>Share message</a></li> 
                
               
                
                
  
                    <ul  class="nav nav-pills nav-stacked" >
                    <li id="set" ><a href="#">Setting<i class="fa fa-pencil fa-fw"></i></a></li> 
                    <li onclick="hide()" id="oo"><a><i class="fa fa-pencil fa-fw"></i>font</a> <button class="sub" onclick="A()">A+</button><button class="sub"  onclick="d()">A</button> <button class="sub"  onclick="a()">-A</button></li> 
                   

                    
                    </ul>
                </ul>
            
                
            </div>
       
        <div class="col-md-9 well">
            <div style=" overflow: hidden; text-align:center; color:grey;   font-weight: bold;
    box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);width: 200px; height: 150px; background:white; margin:auto; float:left; ">The total money for <br> this mounth is  <br><span><?php echo $row*30 ?>$</span>          <div style=" overflow: hidden;position:relative; left: 8px; top: 20px; height: 8px; width: 180px; background:grey; border-radius:10px; "><div style="height: 8px; width:<?php echo $row*2; ?>px; background:#00c6ff; border-radius:10px; "></div> </div></div> 
            <div style=" overflow: hidden; text-align:center; color:grey;   font-weight: bold;
    box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);width: 200px; height: 150px; background:white; margin:auto; float:right; "> The total money for all Supplament is <br> <span><?php echo $qty;?>$</span>          <div style="overflow: hidden; position:relative; left: 8px; top: 20px;height: 8px; width: 180px; background:grey; border-radius:10px; "><div style="height: 8px; width:<?php echo $qty/5; ?>px; background:orange; border-radius:10px; "></div> </div> </div>
            <div style=" overflow: hidden; text-align:center; color:grey;   font-weight: bold;
    box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);width: 200px; height: 150px; background:white;  margin:auto;  " >  The total money for all <br> Equipment is <br> <span><?php echo $qty1; ?>$</span>           <div style="overflow: hidden; position:relative; left: 8px; top: 20px;height: 8px; width: 180px; background:grey; border-radius:10px; "><div style="height: 8px; width:<?php echo $qty1/5; ?>px; background:yellow; border-radius:10px; "></div> </div></div> <br>

      


</div style="width:100%;">
<div>
<div class="d2">
   <p class="iu">Member  <?php echo $row;  ?></p>
<div   class="d1"  >
    <p class="po"></p>
<img class="ii" style="width: 100px; height: 100px;" src="pp.jpg" alt="">

</div>
<div ></div>
</div>
<br> <br> <br>
<div class="d22">
   <p class="iu">Supplament  <?php echo $row2;  ?></p>
<div   class="d11"  >
    <p class="po"></p>
<img class="ii" style="width: 100px; height: 100px;" src="cp.jpg" alt="">

</div>
</div>
<div class="d222">
   <p class="iu">Equipment  <?php echo $row3;  ?></p>
<div   class="d111"  >
    <p class="po"></p>
<img class="ii" style="width: 100px; height: 100px;" src="eq.jpg" alt="">

</div>
</div>
</div>
<br>



</div>

</div>
<div style="overflow: hidden; position:relative; left: 300px;  top: 100px;height: 35px; width: 800px; background:grey; border-radius:20px; "><div style="height: 35px; width:<?php echo $xxx*20; ?>px; background:#00c6ff;  font-family: 'Smooch Sans', sans-serif;
    font-weight: bold;
color:black;
font-size:18px; border-radius:20px; "><p style="position:relative; top:5px;left:9px; color:black;">Male <?php echo $xxx; ?></p></div> </div> </div> <br>
<div style="overflow: hidden; position:relative; left: 300px;  top: 100px;height: 35px; width: 800px; background:grey; border-radius:20px; "><div style="height: 35px; width:<?php echo $yyy*20; ?>px; background:#FF1493; border-radius:20px; "><p style="position:relative; font-family: 'Smooch Sans', sans-serif;
    font-weight: bold;
color:black;
    font-size:18px; top:5px;left:9px; color:black;">Female<?php echo $yyy; ?></p></div> </div> </div> <br>

    <footer style="position:relative; margin-left:47.5%; top:100px; color:grey; font-size:20px; ">
        @copy right
    </footer>
</html>