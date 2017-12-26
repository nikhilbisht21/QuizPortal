<?php

$uid=$_COOKIE['userid'];
$qno=$_SESSION['qno'];
$check=0;


$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);


$sql="SELECT *FROM gama_q where qtn_n='$qno'";
$result=mysql_query($sql,$conn);

if(empty($result))
{header('location:adm3.php');}
else
{

$row=mysql_fetch_assoc($result);

$qtn=$row['qtn_q1'].$row['qtn_q2'];
$lvl=$row['qtn_l'];
$ans=$row['qtn_a'];
$opt1=$row['qtn_b'];
$opt2=$row['qtn_c'];
$opt3=$row['qtn_d'];
$sbjct=$row['qtn_s'];
$dd=$row['qtn_d'];
$tt=$row['qtn_t'];

}


if(!empty($_POST['save']))
{




if(empty($_POST['sbj']))
{$err1="Please select the subject";}
else
{++$check;}

if(empty($_POST['dif']))
{$err1="Please select the difficulty level";}
else
{++$check;}

if(empty($_POST['ansa']))
{$err1="Answer field can't be left blank";}
else
if(strlen($_POST['ansa'])>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($_POST['ansb']))
{$err1="Option 1 field can't be left blank";}
else
if(strlen($_POST['ansb'])>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($_POST['ansc']))
{$err1="Option 2 field can't be left blank";}
else
if(strlen($_POST['ansc'])>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($_POST['ansd']))
{$err1="Option 3 field can't be left blank";}
else
if(strlen($_POST['ansd'])>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($_POST['qstn']))
{$err1="Please enter your question";}
else
if(strlen($_POST['qstn'])>400)
{$err1="Character limit exceeded";}
else
{++$check;}




if($check==7)
{

$sql="delete from gama_q where qtn_n='$qno'";
$set=mysql_query($sql,$conn);

$qstn=$_POST['qstn'];
$sbj=$_POST['sbj'];
$diff=$_POST['dif'];
$ans=$_POST['ansa'];
$opt1=$_POST['ansb'];
$opt2=$_POST['ansc'];
$opt3=$_POST['ansd'];
$date=date("M-d-Y,D");
$time=date("h:i:sa");

$lid=rand(1,16);
$a=rand(200,257);
$b=rand(200,257);
$c=$a*$b;
$id="#q".$lid*$c;


$sql="insert into gama_q values('$id','$sbj','$diff','','','$ansa','$ansb','$ansc','$ansd','$uid','$date','$time')";
$set=mysql_query($sql,$conn);


$len=strlen($qstn);

if($len>200)
{
for($i=0;$i<200;++$i)
{
$qstn1.=$qstn[$i];}

for($i=200;$i<400;++$i)
{
if($qstn[i]=='\0')
break;

$qstn2.=$qstn[$i];

}

$sql1="update gama_q set qtn_q1='$qstn1' where qtn_n='$id'";
$sql2="update gama_q set qtn_q2='$qstn2' where qtn_n='$id'";

$set1=mysql_query($sql1,$conn);
$set2=mysql_query($sql2,$conn);
}
else
if($len<200)
{$sql1="update gama_q set qtn_q1='$qstn' where qtn_n='$id'";
$set1=mysql_query($sql1,$conn);}




if($set&&(($set1&&$set2)||($set1&&!$set2)))
{
$err1="Your changes has been saved successfully";
$_SESSION['qno']=$id;
$status=1;
}

}










}







if($del=='DELETE')
{
$sql="delete from gama_q where qtn_n='$qno'";
$set=mysql_query($sql,$conn);

if($set)
{
$status=1;
$err1="Question has been deleted successfully";
$_SESSION['qno']=0;
}}





mysql_close($conn);

?>