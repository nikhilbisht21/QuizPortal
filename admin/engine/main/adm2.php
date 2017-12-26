<?php

$check=0;
$uid=$_COOKIE['userid'];
$qno=0;


$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);



if(!empty($_POST['post1']))
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
$err1="Question posted successfully";
}

}

}


















if(!empty($_POST['post2']))
{

for($k=0;$k<6;++$k)
{
$check=0;

$ques=$qn[$k];
$diff=$difc[$k];
$ans=$an[$k];
$opt1=$op1[$k];
$opt2=$op2[$k];
$opt3=$op3[$k];





if(empty($_POST['sub']))
{$err1="Please select the subject";}
else
{++$check;}

if(empty($diff))
{$err1="Please select the difficulty level";}
else
{++$check;}

if(empty($ans))
{$err1="Answer field can't be left blank";}
else
if(strlen($ans)>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($opt1))
{$err1="Option 1 field can't be left blank";}
else
if(strlen($opt1)>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($opt2))
{$err1="Option 2 field can't be left blank";}
else
if(strlen($opt2)>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($opt3))
{$err1="Option 3 field can't be left blank";}
else
if(strlen($opt3)>30)
{$err1="Maximum 30 Character's answer allowed";}
else
{++$check;}

if(empty($ques))
{$err1="Please enter your question";}
else
if(strlen($ques)>400)
{$err1="Character limit exceeded";}
else
{++$check;}




if($check==7)
{

$sbj=$_POST['sub'];
$date=date("M-d-Y,D");
$time=date("h:i:sa");

$lid=rand(1,16);
$a=rand(200,257);
$b=rand(200,257);
$c=$a*$b;
$id="#q".$lid*$c;


$sql="insert into gama_q values('$id','$sbj','$diff','','','$ans','$opt1','$opt2','$opt3','$uid','$date','$time')";
$set=mysql_query($sql,$conn);


$len=strlen($ques);

if($len>200)
{
for($i=0;$i<200;++$i)
{
$qstn1.=$ques[$i];}

for($i=200;$i<400;++$i)
{
//if($qstn[i]=='\0')
//break;

$qstn2.=$ques[$i];

}

$sql1="update gama_q set qtn_q1='$qstn1' where qtn_n='$id'";
$sql2="update gama_q set qtn_q2='$qstn2' where qtn_n='$id'";

$set1=mysql_query($sql1,$conn);
$set2=mysql_query($sql2,$conn);
}
else
if($len<200)
{$sql1="update gama_q set qtn_q1='$ques' where qtn_n='$id'";
$set1=mysql_query($sql1,$conn);}




if($set&&(($set1&&$set2)||($set1&&!$set2)))
{
//$err1="Question posted successfully";
++$qno;
}

}




}





if($qno!=0)
{$err1=$qno." question posted successfully";}
else
{$err1="No questions posted";}


}













mysql_close($conn);


?>