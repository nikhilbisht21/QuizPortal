<?php
session_start();

if(!isset($_SESSION['user_fi']))
{header('location:index.php');}

include('engine/main/pass.php');

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

<link rel="stylesheet" type="text/css" href="prop/p.password.css" media="all" />

</head>
<body>



<div id="info">

<?php


if($rest==0)
print<<<Here
<span id="wel">Change your<span id="wel1"> PASSWORD</span></span>


<span id="f1"><br>New password:<br>Re-enter password:</span>


<span style="color:dimgrey;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:135px;left:440px;">$err2</span>
<span style="color:dimgrey;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:165px;left:440px;">$err3</span>



<form method="post">

<input type="text" name="pass2" id="field2" value="" >
<input type="password" name="pass3" id="field3" value="" >

<input type="submit" name="rest" value="SAVE" id="b2">

</form>
Here;
else
if($rest==1)
print<<<Here
<span id="f2">Your new password has been saved successfully</span>
<button onclick="location.href='terminate.php'" id="bt3">CONTNUE</button>
Here;


?>

</div>





<img src="images/up.jpg" id="up" >
</div>

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >Quiz Portal</p></a>

</div>

<div id="foot" >
</div>

</body>
</html>