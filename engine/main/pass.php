<?php
session_start();

$rest=0;
$check=8;
$fi=$_SESSION['user_fi'];

if(!empty($_POST['rest']))
{

if(empty($_POST['pass2']))
$err2="Please enter a new password";
else
{
if(ereg('^[^0-9][0-9a-zA-Z]',$_POST['pass2']))
{
$len7=strlen($_POST['pass2']);

if($len7<'8')
{$err2="Password must contain atleast 8 characters";}
else
if($len7>'20')
{$err2="Character limit exceeded";}
else
{
++$check;}}
else
{$err2="Password must start with an alphabet";
}
}

if(empty($_POST['pass3']))
$err3="Please re-enter new password";



if(!empty($_POST['pass2'])&&!empty($_POST['pass3'])&&$check==9)
{

if($_POST['pass2']!=$_POST['pass3'])
$err3="Password dosen't match";
else
{
$pas=$_POST['pass3'];

$host="localhost";
$user="";
$pass="";

//for creating connection
$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


$sql="update alpha_m2 set user_p='$pas' where user_fi='$fi'";
$set=mysql_query($sql,$conn);

if($set)
{$rest=1;
setcookie('err',"Login to continue",time() +40);
setcookie('userid','',time() -3600);
}
mysql_close($conn);
}


}


}






?>