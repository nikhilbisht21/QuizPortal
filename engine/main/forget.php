<?php
session_start();

$rest=1;
$process=0;

if(!empty($_POST['rest']))
{

$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);

if(empty($_POST['name'])&&empty($_POST['email'])&&empty($_POST['pin']))
{$err3="Please enter your pin";
$err1="Enter Username <br><br>OR<br><br> Email Id";
}
else
if(!empty($_POST['name'])&&!empty($_POST['email']))
{$err1="Enter only one detail";
}
else
if(empty($_POST['name'])&&empty($_POST['email'])&&!empty($_POST['pin']))
{
$err1="Enter Username <br><br>OR<br><br> Email Id";
}


if(empty($_POST['pin']))
{$err3="Enter the 4-digit pin";}
else
if(strlen($_POST['pin'])>4)
{$err3="Invalid pin";}


if(!empty($_POST['name'])&&empty($_POST['email'])&&!empty($_POST['pin']))
{

$name=$_POST['name'];
$pin=$_POST['pin'];

$sql="select user_fi from alpha_m3 where user_n='$name' and usr_pin='$pin'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

if($row['user_fi'])
{$_SESSION['user_fi']=$row['user_fi'];
header('location:pass.php');
}
else
$err1="Username not found";

}
else
if(empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['pin']))
{

$email=$_POST['email'];

$sql="select user_id from beta_per where user_ml='$email'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

$id=$row['user_id'];
$pin=$_POST['pin'];

$sql="select user_fi from alpha_m3 where user_id='$id' and usr_pin='$pin'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

if($row['user_fi'])
{$_SESSION['user_fi']=$row['user_fi'];
header('location:pass.php');
}
else  
$err2="email Id not found";

}

mysql_close($conn);

}




?>