<?php

if(!session_id())
session_start();


$id=$_GET['recv'];
$ufi=$_GET['new'];

$host="localhost";
$user="";
$pass="";


if(empty($id)||empty($ufi))
{setcookie('err',"UserID mismatch found");
}
else
{

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


$sql="delete from beta_p where user_id='$id'";
$sql1="delete from beta_s where user_id='$id'";
$sql2="delete from alpha_m where user_fi='$ufi'";
$sql3="delete from alpha_m2 where user_fi='$ufi'";
$sql4="delete from alpha_m3 where user_fi='$ufi'";

$set=mysql_query($sql,$conn);
$set1=mysql_query($sql1,$conn);
$set2=mysql_query($sql2,$conn);
$set3=mysql_query($sql3,$conn);
$set4=mysql_query($sql4,$conn);

if(($set||$set1)&&$set2&&$set3&&$set4)
{
setcookie('err',"#".$id." Record cleared successfully");
header('location:index.php');
}


mysql_close($conn);
}







?>