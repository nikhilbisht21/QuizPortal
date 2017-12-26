<?php
session_start();

if(!isset($_COOKIE['userid'])||$_COOKIE['ty']!='prof')
{header('location:http://localhost/temp2/terminate.php');}
else
if(!isset($_COOKIE['nm']))
{header('location:http://localhost/temp2/fetch.php');}

include('engine/main/prof4.php');

?>
<html>
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" >

tp1="0px";
tp2="-"+300+"px";

$(document).ready(function(){
    $("#dwn").click(function(){

$("#dwn").fadeOut();
$("#main1").animate({top:tp1},700);

});
});

$(document).ready(function(){
    $("#up").click(function(){

$("#dwn").fadeIn();
$("#main1").animate({top:tp2},700);

});
});







</script>
<head>

<link rel="stylesheet" type="text/css" href="prop/p.prof4.css" media="all" />

</head>
<body>

<div id="main2" >

<a href="index.php"><span id="main21" >Quiz</span></a>
<a href="prof2.php"><span id="main22" >Answer Sheet</span></a>
<span id="main23" >Messages</span>
<a href="prof7.php"><span id="main24" >Rank List</span></a>


</div>


<div id="main4" >

<div id="opt" >
<span id="opt1" onclick="location.href='prof3.php'">RECEIVED</span>
<span id="opt2" onclick="location.href='prof3.php'">SENT</span>
<span id="opt3" style="background:dimgrey;" >COMPOSE</span>
</div>



<div id="main5" >

<p id="err1" style="color:dimgrey;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:55px;left:380px;line-height:50px;" >
<?php print $err1; ?></p>


<font id="fl4" ><span style="font-weight:bold;">Sender</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php print $_COOKIE['nm']; ?><br><span style="font-weight:bold;">Receipent</span></font>

<form method="post" action="" >

<select name="rec" id="fl1" >
<?php

$sid=$_POST['sndn'];
$sn=$_POST['sndi'];

if(!empty($_POST['sndi'])&&!empty($_POST['sndn']))
print<<<Here
<option value="$sn">$sid</option>
<option value="">   </option>
Here;


?>
<option value="">   </option>
<?php


for($i=0;$i<$l;++$i)
{
print<<<Here
<option value="$id[$i]">$name[$i]</option>
Here;
}
?>
</select>
<textarea id="fl2" name="msg" wrap="hard" placeholder="Enter your message here(maximum 400 characters)" >
</textarea>
<input type="submit" name="send" value="SEND" id="fl3" >

</form>

</div>


</div>


<div id="main1" ><div id="main11" >

<img src="images/usr.jpg" id="usr" >

<font id="txt1" ><?php print $_COOKIE['nm']; ?><br><font id="txt11" ><?php print $_COOKIE['clan']; ?><br><br>#<?php print $_COOKIE['userid']; ?></font></font>

<font id="txt2" ><b>Username<br>Age<br>Gender<br>Email Id</b></font>
<font id="txt3" ><?php print $_COOKIE['usernm']; ?><br><?php print $_COOKIE['ag']; ?><br><?php print $_COOKIE['gn']; ?><br><?php print $_COOKIE['ml']; ?></font>


</div>


<img src="images/up.jpg" id="up" >
</div>

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >Quiz Portal</p></a>

<div id="lg">
<a href="http://localhost/temp2/terminate.php"><font id="lg1" >LOGOUT</font></a>
<img src="images/dwn.jpg" id="dwn" >
</div></div>

<div id="foot" >
</div>

</body>
</html>