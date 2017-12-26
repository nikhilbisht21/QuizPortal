<?php
session_start();

if(!isset($_COOKIE['userid'])||$_COOKIE['ty']!='stud')
{header('location:http://localhost/temp2/terminate.php');}
else
if(!isset($_COOKIE['nm']))
{header('location:http://localhost/temp2/fetch.php');}

include('engine/main/stud1.php');

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
    $("#q91").click(function(){

$("#main4").hide();
$("#main3").show();
document.getElementById("q91").setAttribute("style","background:grey;");
document.getElementById("q92").setAttribute("style","background:#00bfff;");
});
});

$(document).ready(function(){
    $("#q92").click(function(){

$("#main3").hide();
$("#main4").show();
document.getElementById("q92").setAttribute("style","background:grey;");
document.getElementById("q91").setAttribute("style","background:#00bfff;");
});
});

function swipe1(a)
{
x="#ques"+a;
y="#ques"+(a+1);

$(x).hide();
$(y).show();




if(a==10)
{
$("#main4").hide();
$("#main5").show();
}

}

function swipe2(b)
{
x="#ques"+b;
y="#ques"+(b-1);

$(x).hide();
$(y).show();

}



function assign(a,b)
{
x="d"+a;
y="a"+a;


document.getElementById(x).innerHTML=b;
document.getElementById(y).setAttribute("value",b);

}



</script>
<head>

<link rel="stylesheet" type="text/css" href="prop/p.stud1.css" media="all" />

</head>
<body>

<div id="main2" >

<span id="main21" >Quiz</span>
<a href="stud2.php"><span id="main22" >Answer Sheet</span></a>
<a href="stud3.php"><span id="main23" style="overflow:auto;" >Messages</a>
<a href="stud7.php"><span id="main24" >Rank List</span></a>

</div>



<div id="main6" >

<font id="sc1">YOU SCORED</font>
<font id="sc2"><?php print $_SESSION['score']; ?></font>

<font id="sc3"><?php print $_SESSION['right']; ?><br>Right Answers</font>
<font id="sc4"><?php print $_SESSION['wrong']; ?><br>Wrong Answers</font>


 
<button id="sb1" onclick="location.href='stud2.php'">GET ANSWERS</button> 

</div>



<div id="main1" ><div id="main11" >

<img src="images/usr.jpg" id="usr" >

<font id="txt1" ><?php print $_COOKIE['nm']; ?><br><font id="txt11" ><?php print $_COOKIE['clan']; ?><br><br>#<?php print $_COOKIE['userid']; ?></font></font>

<font id="txt2" ><b>Username<br>Age<br>Gender<br>Email Id</b></font>
<font id="txt3" ><?php print $_COOKIE['usernm']; ?><br><?php print $_COOKIE['ag']; ?><br><?php print $_COOKIE['gn']; ?><br><?php print $_COOKIE['ml']; ?></font>


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