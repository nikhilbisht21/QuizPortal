<?php
session_start();

if(!isset($_COOKIE['userid'])||$_COOKIE['ty']!='prof')
{header('location:http://localhost/temp2/terminate.php');}
else
if(!isset($_COOKIE['nm']))
{header('location:http://localhost/temp2/fetch.php');}


include('engine/main/prof6.php');

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

$(document).ready(function(){
    $("#opt1").click(function(){

$("#main6").hide();
$("#main5").show();
document.getElementById("opt1").setAttribute("style","background:dimgrey;");
document.getElementById("opt2").setAttribute("style","background:#00bfff;");
});
});

$(document).ready(function(){
    $("#opt2").click(function(){

$("#main5").hide();
$("#main6").show();
document.getElementById("opt2").setAttribute("style","background:dimgrey;");
document.getElementById("opt1").setAttribute("style","background:#00bfff;");
});
});




</script>
<head>

<link rel="stylesheet" type="text/css" href="prop/p.prof3.css" media="all" />

</head>
<body>

<div id="main2" >

<a href="index.php"><span id="main21" >Quiz</span></a>
<a href="prof2.php"><span id="main22" >Answer Sheet</span></a>
<span id="main23" >Messages</span>
<a href="prof7.php"><span id="main24" >Rank List</span></a>


</div>


<div id="main4" style="display:block;border:2px solid black;">


<div id="main7" >

<span id="mn71" >DATE: <?php print $m_dd."/".$m_tt; ?></span>
<span id="mn72" >TO: <?php print $to_n; ?></span>
<span id="mn73" >FROM: <?php print $fro_n; ?></span>
<span id="mn74" ><?php print $msg; ?></span>

<form method="post" action="prof4.php">
<?php

if($sts=='in')
print<<<Here
<input type="hidden" name="sndi" value="$from">
<input type="hidden" name="sndn" value="$fro_n">
Here;
else
if($sts=='out')
print<<<Here
<input type="hidden" name="sndi" value="$to">
<input type="hidden" name="sndn" value="$to_n">
Here;






?>
<input type="submit" name="new" value="NEW MESSAGE" id="mn75">
</form>

<form method="post" action="">
<input type="submit" name="del" value="DELETE" id="mn76"></form>

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