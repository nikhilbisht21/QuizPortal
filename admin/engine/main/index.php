<?php

$s_id=array();
$s_name=array();
$s_age=array();
$s_gen=array();
$s_mail=array();
$s_uf=array();
$s_un=array();
$s_pass=array();
$s_pin=array();
$s_dd=array();
$s_tt=array();


$p_id=array();
$p_name=array();
$p_age=array();
$p_gen=array();
$p_mail=array();
$p_uf=array();
$p_un=array();
$p_pass=array();
$p_pin=array();
$p_dd=array();
$p_tt=array();



$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


$i=0;

$sql="SELECT *from beta_p,alpha_m3 where beta_p.user_id=alpha_m3.user_id";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{
$p_id[$i]=$row['user_id'];
$p_name[$i]=$row['name'];
$p_age[$i]=$row['age'];
$p_gen[$i]=$row['gen'];
$p_mail[$i]=$row['user_ml'];
$p_uf[$i]=$row['user_fi'];
$p_un[$i]=$row['user_n'];
$p_pin[$i]=$row['usr_pin'];
$p_dd[$i]=$row['u_date'];
$p_tt[$i]=$row['u_time'];

$fi=$p_uf[$i];

$sql1="SELECT user_p from alpha_m2 where user_fi='$fi'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$p_pass[$i]=$row1['user_p'];

++$i;
}

$i=0;

$sql="SELECT *from beta_s,alpha_m3 where beta_s.user_id=alpha_m3.user_id";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{

$s_id[$i]=$row['user_id'];
$s_name[$i]=$row['name'];
$s_age[$i]=$row['age'];
$s_gen[$i]=$row['gen'];
$s_mail[$i]=$row['user_ml'];
$s_uf[$i]=$row['user_fi'];
$s_un[$i]=$row['user_n'];
$s_pin[$i]=$row['user_pin'];
$s_dd[$i]=$row['u_date'];
$s_tt[$i]=$row['u_time'];

$fi=$s_uf[$i];

$sql1="SELECT user_p from alpha_m2 where user_fi='$fi'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$s_pass[$i]=$row1['user_p'];



++$i;
}


for($i=0;$i<100;++$i)
{
if(empty($p_id[$i]))
{$m=$i;
break;
}
}

for($i=0;$i<100;++$i)
{
if(empty($s_id[$i]))
{$l=$i;
break;
}
}





mysql_close($conn);




?>