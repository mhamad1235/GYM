<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST['user'];
    $b=$_POST['pass'];
if(isset($_POST['check'])){
    setcookie('username',$a,time()+3600*27+7);
    setcookie('password',$b,time()+3600*27+7);
}
else{

    setcookie('username',$a,30);
    setcookie('password',$b ,30);
}
}
?>