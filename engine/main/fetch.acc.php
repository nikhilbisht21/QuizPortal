<?php
session_start();

$find=$_SESSION['find'];
$find2=$_SESSION['find2'];




$host="localhost";
$user="";
$pass="";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("portal",$conn);
$sql4="SELECT user_id,user_ty FROM alpha_m3 where user_n='$find2' and user_fi='$find'";
$result4=mysql_query($sql4,$conn);
$row4=mysql_fetch_assoc($result4);

$ty=$row4['user_ty'];
setcookie('ty',$row4['user_ty']);

//print $ty;

if(empty($row4['user_ty']))
{
header('location:signin.php');
}
else
{


setcookie('userid',$row4['user_id']);
$id=$_COOKIE['userid'];

if($row4['user_ty']=='prof')
{
//print "profffff";

$sql1="SELECT * FROM beta_p where user_id='$id'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

setcookie('nm',$row1['name']);
setcookie('ag',$row1['age']);
setcookie('gn',$row1['gen']);
setcookie('ml',$row1['user_ml']);
setcookie('clan',$row1['user_cln']);
setcookie('dt',$row1['u_date']);
setcookie('tm',$row1['u_time']);
setcookie('userfi',$find);
setcookie('usernm',$find2);
}
else
if($row4['user_ty']=='stud')
{
//print "studzz";

$sql1="SELECT * FROM beta_s where user_id='$id'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

setcookie('nm',$row1['name']);
setcookie('ag',$row1['age']);
setcookie('gn',$row1['gen']);
setcookie('ml',$row1['user_ml']);
setcookie('clan',$row1['user_cln']);
setcookie('dt',$row1['u_date']);
setcookie('tm',$row1['u_time']);
setcookie('userfi',$find);
setcookie('usernm',$find2);
}

}

//print $row1['name'];

mysql_close($conn);
?>