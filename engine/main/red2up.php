<?php
session_start();

$lid=152182;

$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;
$id=$lid*$c;

$lid1=15010282;
$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;

$userid=$lid1*$c;

$type=$_COOKIE['type'];
$username=$_COOKIE['usrnme'];
$name=$_COOKIE['name'];
$age=$_COOKIE['age'];
$gen=$_COOKIE['gen'];
$clan=$_COOKIE['sect'];
$mail=$_COOKIE['email'];
$pas=$_SESSION['pass'];
$pin=$_SESSION['pin'];
$date=date("M-d-Y,D");
$time=date("h:i:sa");



$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);
$sql1="insert into alpha_m values('$username','$id')";
$sql2="insert into alpha_m2 values('$id','$pas')";
$sql13="insert into alpha_m3 values('$username','$id','$userid','$pin','$type','$date','$time')";

if($type=='prof')
{$sql4="insert into beta_p values('$userid','$name','$age','$gen','$clan','$mail','$date','$time')";}
else
if($type=='stud')
{$sql4="insert into beta_s values('$userid','$name','$age','$gen','$clan','$mail','$date','$time','0','0','0')";}



$set1=mysql_query($sql1,$conn);
$set2=mysql_query($sql2,$conn);
$set3=mysql_query($sql3,$conn);
$set13=mysql_query($sql13,$conn);
$set4=mysql_query($sql4,$conn);


if(isset($set1)&&isset($set2)&&isset($set13)&&isset($set4))
{
$_SESSION[]='';


setcookie('err',"Login to continue",time() +30);
header('location:http://localhost/temp2/index.php');
}






print<<<Here
$type<br>$name<br>$username<br>$age<br>$gen<br>$clan<br>$username<br>$userid<br>$id<br>$pin<br>$date<br>$time
Here;



?>