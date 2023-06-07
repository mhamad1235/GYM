
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location:Login2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="me!.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   tr:nth-child(odd) {color: #FFF}
    .table th {
  padding-top: 21px;
  padding-bottom: 21px;
}

.table td {
  padding-top: 16px;
  padding-bottom: 16px;
}
.styled-table {
  width:100% ;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.mhamad{
    margin:0;
    padding:0;
 height: 400px; 
  position: relative;
  top: 90px;
  }
tr:nth-child(odd) {color: #FFF
 
}

    .table th {
  padding-top: 21px;
  padding-bottom: 21px;
}

.table td {
  padding-top: 16px;
  padding-bottom: 16px;
}
table thead tr {
  margin:0;
  padding:0;
  color: black;
  padding: 3px;
  height: 50px;
  position: sticky;
  top: 0;
  z-index: 1;
  width: 25vw;
  background: none;
}
table thead th {
  margin:0;
  padding:0;  
  color: black;
  padding: 3px;
  height: 50px;
  position: sticky;
  top: 0;
  z-index: 1;
  width: 25vw;
  background: none;
}
table {

  font-family: "Fraunces", serif;
  font-size: 100%;
  white-space: nowrap;
  border: none;
  border-collapse: separate;
  border-spacing: 0;
  table-layout: fixed;
}

.styled-table thead tr {
    background-color: #6495ED;
    color: #ffffff;
    text-align: left;
}



.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 4px solid #6495ED;;
}
.styled-table tbody tr.active-row {
  margin:0; 
    font-weight: bold;
    color: #009879;
}
.subb{
    color:wheat;
    padding: 10px 20px;
    border: 2px solid #3498db;
    background: black;
    backdrop-filter: blur(4.0px);
    -webkit-backdrop-filter: blur(4.0px);
    font-weight: bold;
    cursor: pointer;
    border-radius: 10px;
  
}

}
.subb:hover{    
    background: green;
color:black;
    transition: 0.8s;
color: black;}



table {
  text-align: left;
  position: relative;
  border-collapse: collapse; 
}
th, td {
  padding: 0.25rem;
}
tr.red th {
  background: red;
  color: white;
}
tr.green th {
  background: green;
}
.styled-table thead tr {
    background-color: #6495ED;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #6495ED;;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
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
.subb{
    color:wheat;
    padding: 10px 20px;
    border: 2px solid #3498db;
    background: black;
    backdrop-filter: blur(4.0px);
    -webkit-backdrop-filter: blur(4.0px);
    font-weight: bold;
    cursor: pointer;
    border-radius: 10px;
  
}
a:hover{
  color:black;
}
.subb:hover{    
    
    background: red;
color:black;
    transition: 0.8s;
color: black;}
</style>
<body>
<section id="mhamad">
<ul class="m112">

  <li class="l1"><a style="  text-decoration: none;"  href="trainer.php"><img class="home" src="gym1.jpg" alt="sory"</a></li>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="player.php">Player</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="plan.php">Plan</a>
  <li class="vip"><a style="  text-decoration: none;"  class="active2" href="s.php">Supplament</a>
</ul>

<div style="overflow:auto;" class="mhamad">
 
<br> <br>

<table style="hieght: 500px;" class="styled-table">
  <thead>
    <tr>
      <th width="20%" scope="col">Id</th>
      <th width="55%" scope="col">name</th>
      <th scope="col">type</th>
      <th scope="col">prise</th>
    </tr>
  </thead>
  <tbody>

    <?php 
include "db.connection.php";
$sql="SELECT * FROM `crud6`";
$result=mysqli_query($con,$sql);
if($result){
while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $plan=$row['name'];
    $type=$row['type'];
    $prise=$row['prise'];
    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$plan.'</td>
    <td>'.$type.'</td>
    <td>'.$prise.'</td>
   
  </tr>';
}

}

?>
  </tbody>
</table> 
</div>
</section>
</body>
</html>