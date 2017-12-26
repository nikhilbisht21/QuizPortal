<?php

$check=0;
$id=array();
$name=array();
$i=0;
$uid=$_COOKIE['userid'];




$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


if($_COOKIE['ty']=='stud')
{
$i=0;
$sql="SELECT user_id,name from beta_p where user_id!='$uid'";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{
$id[$i]=$row['user_id'];
$name[$i]=$row['name'];
++$i;
}

}
else
if($_COOKIE['ty']=='prof')
{
$i=0;
$sql="SELECT user_id,name from beta_p where user_id!='$uid'";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{
$id[$i]=$row['user_id'];
$name[$i]=$row['name']; 
++$i;
}

$sql="SELECT user_id,name from beta_s where user_id!='$uid'";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{
$id[$i]=$row['user_id'];
$name[$i]=$row['name'];
++$i;
}

}



if(!empty($_POST['send']))
{

if(empty($_POST['rec']))
{$err1="Please select the receipent";}
else
{++$check;}

if(empty($_POST['msg']))
{$err1="Please enter the message";}
else
if(strlen($_POST['msg'])>400)
{$err1="Character limit exceeded";}
else
{++$check;}




if($check==2)
{



$msg=$_POST['msg'];
$recp=$_POST['rec'];
$from=$_COOKIE['userid'];
$date=date("M-d-Y,D");
$time=date("h:i:sa");

$lid=rand(1,16);
$a=rand(200,257);
$b=rand(200,257);
$c=$a*$b;
$id="msg".$lid*$c;


$sql="insert into tau_m values('$id','$from','$recp','$date','$time','','')";
$set=mysql_query($sql,$conn);


$len=strlen($msg);

if($len>200)
{
for($i=0;$i<200;++$i)
{
$msg1.=$msg[$i];}

for($i=200;$i<400;++$i)
{
if($msg[i]=='\0')
break;

$msg2.=$msg[$i];

}

$sql1="update tau_m set msg_m1='$msg1' where msg_id='$id'";
$sql2="update tau_m set msg_m2='$msg2' where msg_id='$id'";

$set1=mysql_query($sql1,$conn);
$set2=mysql_query($sql2,$conn);
}
else
if($len<200)
{$sql1="update tau_m set msg_m1='$msg' where msg_id='$id'";
$set1=mysql_query($sql1,$conn);}




if($set&&(($set1&&$set2)||($set1&&!$set2)))
{
$err1="Message has been sent successfully";
}

}

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