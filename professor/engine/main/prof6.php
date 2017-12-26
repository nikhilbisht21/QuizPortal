<?php

$mno=$_SESSION['mno'];
$sts=$_SESSION['sts'];
$host="localhost";
$user="";
$pass="";


$i=0;

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);

$sql="SELECT *from tau_m where msg_id='$mno'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);


$m_id=$row['msg_id'];
$from=$row['sndr_id'];
$to=$row['recp_id'];
$m_dd=$row['msg_d'];
$m_tt=$row['msg_t'];
$msg=$row['msg_m1'].$row['msg_m2'];

$sql1="SELECT name from beta_p where user_id='$from'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$fro_n=$row1['name'];


if(empty($fro_n))
{
$sql1="SELECT name from beta_s where user_id='$from'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$fro_n=$row1['name'];

}



$sql1="SELECT name from beta_p where user_id='$to'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$to_n=$row1['name'];


if(empty($to_n))
{
$sql1="SELECT name from beta_s where user_id='$to'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$to_n=$row1['name'];

}





if($del=='DELETE')
{
//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


$sql="delete from tau_m where msg_id='$mno'";
$set=mysql_query($sql,$conn);

if($set)
{
header('location:prof3.php');
}}


mysql_close($conn);







print $mno;

?>