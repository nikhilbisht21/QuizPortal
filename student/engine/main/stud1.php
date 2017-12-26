<?php
if(!session_id())
session_start();


$uid=$_COOKIE['userid'];
$l=0;
$i=0;
$j=1;
$process=0;
$check5=0;

$lvl=1;
$sbjct=2;
$qid=array();
$qtn=array();
$ans=array();
$op1=array();
$op2=array();
$op3=array();

$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);

if(!empty($_POST['go']))
{

if(empty($_POST['subj']))
$err1="Please select the subject";
else
++$check5;


if(empty($_POST['diff']))
$err1="Please select the difficulty level";
else
++$check5;




if($check5==2)
{
$lvl=$_POST['diff'];
$sbjct=$_POST['subj'];


$sql="SELECT *FROM gama_q where qtn_s='$sbjct'and qtn_l='$lvl' order by rand()";
$result=mysql_query($sql,$conn);

if(empty($result))
$err1="Quiz questions not available";
else
{
while($row=mysql_fetch_assoc($result))
{
$qid[$i]=$row['qtn_n'];
$qtn[$i]=$row['qtn_q1'].$row['qtn_q2'];
$ans[$i]=$row['qtn_a'];
$op1[$i]=$row['qtn_b'];
$op2[$i]=$row['qtn_c'];
$op3[$i]=$row['qtn_d'];
++$i;
}


for($i=0;$i<100;++$i)
{
if(empty($qid[$i]))
{$l=$i;
break;
}
}


for($i=0;$i<$l;++$i)
{
$j=rand(0,1);

$opt[$j][$i]=$ans[$i];
++$j;

if($j==4)
$j=0;

$opt[$j][$i]=$op1[$i];
++$j;

if($j==4)
$j=0;

$opt[$j][$i]=$op2[$i];
++$j;

if($j==4)
$j=0;

$opt[$j][$i]=$op3[$i];

}

++$process;








}
}


}









if(!empty($_POST['cal']))
{


$score=0;
$rght=0;
$wrng=0;

if($lvl==1)
{$pos=1;
$neg=-0.5;}
else
if($lvl==2)
{$pos=2;
$neg=-1;}
else
if($lvl==3)
{$pos=3;
$neg=-2;}

$qstn=array();
$ans=array();

$qstn[0]=$_POST['q1'];
$_SESSION['a']=$qstn[0];
$qstn[1]=$_POST['q2'];
$_SESSION['b']=$qstn[1];
$qstn[2]=$_POST['q3'];
$_SESSION['c']=$qstn[2];
$qstn[3]=$_POST['q4'];
$_SESSION['d']=$qstn[3];
$qstn[4]=$_POST['q5'];
$_SESSION['e']=$qstn[4];
$qstn[5]=$_POST['q6'];
$_SESSION['f']=$qstn[5];
$qstn[6]=$_POST['q7'];
$_SESSION['g']=$qstn[6];
$qstn[7]=$_POST['q8'];
$_SESSION['h']=$qstn[7];
$qstn[8]=$_POST['q9'];
$_SESSION['k']=$qstn[8];
$qstn[9]=$_POST['q10'];
$_SESSION['p']=$qstn[9];

$ans[0]=$_POST['ans1'];
$ans[1]=$_POST['ans2'];
$ans[2]=$_POST['ans3'];
$ans[3]=$_POST['ans4'];
$ans[4]=$_POST['ans5'];
$ans[5]=$_POST['ans6'];
$ans[6]=$_POST['ans7'];
$ans[7]=$_POST['ans8'];
$ans[8]=$_POST['ans9'];
$ans[9]=$_POST['ans10'];



for($i=0;$i<10;++$i)
{
$qtn=$qstn[$i];
$an=$ans[$i];

$sql="SELECT *FROM gama_q where qtn_n='$qtn'and qtn_a='$an'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

if($row['qtn_a']==$an)
{
$score=$score+$pos;
++$rght;
}
else
if(empty($row))
{
$score=$score+$neg;
++$wrng;
}

if($i==9)
{
$sql="update beta_s set u_score=u_score+'$score' where user_id='$uid'";
$sql1="update beta_s set score_rg=score_rg+'$rght' where user_id='$uid'";
$sql2="update beta_s set score_wr=score_wr+'$wrng' where user_id='$uid'";


$result=mysql_query($sql,$conn);
$result1=mysql_query($sql1,$conn);
$result2=mysql_query($sql2,$conn);

$process=2;
$_SESSION['score']=$score;
$_SESSION['right']=$rght;
$_SESSION['wrong']=$wrng;
header('location:stud8.php');
}

}





}









































/*




print $sql;
print "<br>";
print $er2."<br>";

print "<table border='1'>";
print "<tr><th>Subject</th><th>Qno</th><th>qtn</th><th>ans</th><th>opt1</th><th>opt2</th><th>opt3</th></tr>";
for($j=0;$j<$l;++$j)
{print "<tr><td>";
print $subjct;
print "</td><td>";
print $qid[$j];
print "</td><td>";
print $qtn[$j];
print "</td><td>";;
print $opt[0][$j];
print "</td><td>";
print $opt[1][$j];
print "</td><td>";
print $opt[2][$j];
print "</td><td>";
print $opt[3][$j];
print "</td></tr>"; 
}
print "</table>";







print $aw;
print "<br>";
print $l;

*/


mysql_close($conn);


?>