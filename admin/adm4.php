<?php
session_start();


include('engine/main/adm4.php');

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

<link rel="stylesheet" type="text/css" href="prop/p.adm4.css" media="all" />

</head>
<body>

<div id="main2" >


<a href="index.php"><span id="main21" >User's database</span></a>
<a href="adm2.php"><span id="main22" >Post question</span></a>
<a href="adm3.php"><span id="main23" >Review question</span></a>
<span id="main24" >Message Database</span>
<a href="adm5.php"><span id="main25" >Rank List</span></a>

</div>


<div id="main4" >

<div id="main5" >

<span id="mn51" >MSG ID</span>
<span id="mn52" >SENDER</span>
<span id="mn53" >RECEIVER</span>

<span id="mn54" >DATE/TIME</span>
<span id="mn55" >MESSAGE</span>

<?php
$t=40;

for($i=0;$i<$l;++$i)
{
$tp=$t."px";

print<<<Here
<div id="mg" onclick="location.href='red4.php?recv=$id[$i]&new=in'" style="position:absolute;top:$t;">

<span id="mg1" >$id[$i]</span>
<span id="mg2" >$fro_n[$i]</span>
<span id="mg3" >$to_n[$i]</span>
<span id="mg4" >$dd[$i], $tt[$i]</span>
<span id="mg5" >$msg[$i]</span>

</div>
Here;

$t=$t+35;
}

?>

</div>

</div>




<div id="main1" ><div id="main11" >

<img src="images/usr.jpg" id="usr" >

<font id="txt1" >Prof. Kavinder Rawal<br><font id="txt11" >Mechanical Engineering<br><br>#12345679850</font></font>

<font id="txt2" >User Id<br>Age<br>Gender<br>Email Id</font>
<font id="txt3" >User Id<br>Age<br>Gender<br>Nikgilsinghbisht21@gmail.con</font>

<div id="msg">
<span id="msg1">Messages</span>

<div id="msg2">Messages<br>Messages<br>Messages<br>Messages<br>Messages<br>Messages<br>Messages<br>Messages<br>Messages<br>Messages<br>Messages<br>Messages</div>

</div>


</div>

<img src="images/up.jpg" id="up" >
</div>

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >Quiz Portal</p></a>

<div id="lg">
<a href="http://localhost/temp2/terminate.php"><font id="lg1" >LOGOUT</font></a>
</div></div>

<div id="foot" >
</div>

</body>
</html>