<?php
session_start();


include('engine/main/adm44.php');

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

<a href=""><span id="main21" >User's database</span></a>
<span id="main22" >Post question</span>
<a href=""><span id="main23" >Review question</span></a>
<a href=""><span id="main24" >Message Database</span></a>
<a href=""><span id="main25" >Rank List</span></a>

</div>


<div id="main4" style="display:block;border:2px solid black;">


<div id="main7" >

<span id="mn71" >DATE: <?php print $m_dd."/".$m_tt; ?></span>
<span id="mn72" >TO: <?php print $to_n; ?></span>
<span id="mn73" >FROM: <?php print $fro_n; ?></span>
<span id="mn74" ><?php print $msg; ?></span>



<form method="post" action="">
<input type="submit" name="del" value="DELETE" id="mn76"></form>

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