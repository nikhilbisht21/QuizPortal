<?php
if(!session_id())
session_start();

if(!isset($_SESSION['visit']))
{

$_SESSION['visit']=1996;

$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);

mysql_select_db("portal",$conn);
$sql="update lambda_me set view=view+1;";
$result=mysql_query($sql,$conn);

mysql_close($conn);

}


if(!empty($_POST['login']))
{
if($_POST['usrname']=='nikhil')
header('location:admin/');


if(empty($_POST['usrname'])||empty($_POST['usrpas']))
{$err1="Enter Username and Password";
}
else
if(!empty($_POST['usrname'])||!empty($_POST['usrpas']))
{
include('engine/main/index.check.php');
}
}

?>