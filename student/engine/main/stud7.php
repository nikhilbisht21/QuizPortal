<?php
start_session;

$rank=array();
$name=array();
$score=array();

$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


$i=0;

$sql="SELECT name,u_score from beta_s";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{
$rank[$i]=$i+1;
$name[$i]=$row['name'];
$score[$i]=$row['u_score'];

++$i;
}

for($i=0;;++$i)
{
if(empty($rank[$i]))
{$l=$i;
break;
}
}


mysql_close($conn);





?>