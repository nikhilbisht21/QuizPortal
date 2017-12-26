<?php


$uid=$_COOKIE['userid'];
$l=0;
$i=0;

$qid=array();
$qtn=array();
$ans=array();
$lvl=array();
$opt1=array();
$opt2=array();
$opt3=array();

$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);

//$_POST['sub']=1;
//$_POST['subj']=2;



if(!empty($_POST['sub']))
{

if(empty($_POST['subj']))
$err1="Please select the subject";
else
{
$subjct=$_POST['subj'];


$sql="SELECT *FROM gama_q where qtn_s='$subjct'";
$result=mysql_query($sql,$conn);

if(empty($result))
$err2="No questions found";
else
{
while($row=mysql_fetch_assoc($result))
{
$qid[$i]=$row['qtn_n'];
$qtn[$i]=$row['qtn_q1'].$row['qtn_q2'];
$lvl[$i]=$row['qtn_l'];
$ans[$i]=$row['qtn_a'];
$opt1[$i]=$row['qtn_b'];
$opt2[$i]=$row['qtn_c'];
$opt3[$i]=$row['qtn_d'];
++$i;
}
}

}

}


for($i=0;$i<100;++$i)
{
if(empty($qid[$i]))
{$l=$i;
break;
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
print $ans[$j];
print "</td><td>";
print $opt1[$j];
print "</td><td>";
print $opt2[$j];
print "</td><td>";
print $opt3[$j];
print "</td><td>";
print $lvl[$j];
print "</td></tr>"; 
}
print "</table>";







print $aw;
print "<br>";
print $l;
*/


mysql_close($conn);

?>