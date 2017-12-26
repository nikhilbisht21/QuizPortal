<?php
if(!session_id())
session_start();


$uid=$_COOKIE['userid'];
$l=0;
$i=0;
$j=1;
$process=0;
$check5=0;


$qid=array();
$ans=array();
$qstn=array();

$qid[0]=$_SESSION['a'];
$qid[1]=$_SESSION['b'];
$qid[2]=$_SESSION['c'];
$qid[3]=$_SESSION['d'];
$qid[4]=$_SESSION['e'];
$qid[5]=$_SESSION['f'];
$qid[6]=$_SESSION['g'];
$qid[7]=$_SESSION['h'];
$qid[8]=$_SESSION['k'];
$qid[9]=$_SESSION['p'];


$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


for($i=0;$i<10;++$i)
{
$no=$qid[$i];

$sql="SELECT qtn_q1,qtn_q2,qtn_a FROM gama_q where qtn_n='$no'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);


$qstn[$i]=$row['qtn_q1'].$row['qtn_q2'];
$ans[$i]=$row['qtn_a'];
}


mysql_close($conn);


?>