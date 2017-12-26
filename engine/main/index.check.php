<?php
session_start();

$logid=$_POST['usrname'];
$userpass=$_POST['usrpas'];

$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);

mysql_select_db("portal",$conn);
$sql="SELECT user_fi FROM alpha_m where user_n='$logid'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);


if(empty($row['user_fi']))
$err1="Enter a valid Username and Password";
else
if(isset($row))
{


$fi=$row['user_fi'];

$sql1="SELECT user_p FROM alpha_m2 where user_fi='$fi'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);


if($userpass==$row1['user_p'])
{
$_SESSION['find']=$fi;
$_SESSION['find2']=$logid;
header('location:fetch.php');}
else
$err1="Incorrect Password";

}
else
$err1="Enter a valid Username or Password";



mysql_close($conn);


?>