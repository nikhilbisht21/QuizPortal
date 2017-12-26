<?php

$check=0;
$id=array();
$msg=array();
$dd=array();
$tt=array();
$fro=array();
$to=array();
$fro_n=array();
$to_n=array();
$uid=$_COOKIE['userid'];




$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


$i=0;

$sql="SELECT *from tau_m ";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{
$id[$i]=$row['msg_id'];
$fro[$i]=$row['sndr_id'];
$to[$i]=$row['recp_id'];
$dd[$i]=$row['msg_d'];
$tt[$i]=$row['msg_t'];
$msg[$i]=$row['msg_m1'].$row['msg_m2'];

$from=$fro[$i];

$sql1="SELECT name from beta_p where user_id='$from'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$fro_n[$i]=$row1['name'];


if(empty($fro_n[$i]))
{
$sql1="SELECT name from beta_s where user_id='$from'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$fro_n[$i]=$row1['name'];

}


$top=$to[$i];

$sql1="SELECT name from beta_p where user_id='$top'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$to_n[$i]=$row1['name'];

if(empty($to_n[$i]))
{
$sql1="SELECT name from beta_s where user_id='$top'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$to_n[$i]=$row1['name'];


}

++$i;
}



for($i=0;$i<100;++$i)
{
if(empty($id[$i]))
{$l=$i;
break;
}
}


mysql_close($conn);





?>