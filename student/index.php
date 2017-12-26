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


<?php

if($process==0)
{
print<<<Here
<div id="main3" >
<p id="err1" style="color:dimgrey;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:0px;left:300px;line-height:50px;" >
$err1</p>

<font id="fl21">Please read the following instructions before attempting quiz</font>
<p id="fl22">1.Quiz will consist of 10 objective type questions 
<br>2.You are free to choose any of the given subjects for quiz
<br>3.You to select the dificulty level of quiz
<br>4.Following is the marks distribution pattern for quiz
<br><br><br><br>
<table id="tb1" border="">
<tr><th id="tb2">Level</th><th id="tb2">Easy</th><th id="tb2">Medium</th><th id="tb2">Hard</th></tr>
<tr><th id="tb2">Right answer</th><td id="tb3">+1</td><td id="tb3">+2</td><td id="tb3">+3</td></tr>
<tr><th id="tb2">Wrong answer</th><td id="tb3">-0.5</td><td id="tb3">-1</td><td id="tb3">-2</td></tr>
<tr></tr>
</table>
<br><br><br><br><br>5.Evalution will be done at the end of quiz which will decide your rank in the portal
<br>6.Answer sheet will be only available at end of quiz only
</p>

<font id="fl1">Subject</font>
<font id="fl2">Difficluty level</font>


<form method="post"
         action="" style="position:absolute;">

<select id="field1" name="subj" >
<option>  </option>
<option value="Maths">Maths</option>
<option value="Science">Science</option>
<option value="History">History</option>
</select>


<select id="field2" name="diff" >
<option value="1" >Easy</option>
<option value="2" >Medium</option>
<option value="3" >Hard</option>
</select>
           

       
<input type="submit"
           name="go"
           value="GO"
             id="fl3"  >

</form>


</div>
Here;
}


if($process==1)
{
print<<<Here
<div id="main5" >

<table id="tb5" border="">
<tr><th>Ques No.</th><th>Ans</th></tr>
<tr><th>1</th><td id="d1"></td></tr>
<tr><th>2</th><td id="d2"></td></tr>
<tr><th>3</th><td id="d3"></td></tr>
<tr><th>4</th><td id="d4"></td></tr>
<tr><th>5</th><td id="d5"></td></tr>
<tr><th>6</th><td id="d6"></td></tr>
<tr><th>7</th><td id="d7"></td></tr>
<tr><th>8</th><td id="d8"></td></tr>
<tr><th>9</th><td id="d9"></td></tr>
<tr><th>10</th><td id="d10"></td></tr>
</table>

<form method="post" action="">
Here;

$z=0;

for($i=0;$i<10;++$i)
{$z=$i+1;
print<<<Here
<input type="hidden" name="q$z" value="$qid[$i]" ><br>
Here;
}


for($i=0;$i<10;++$i)
{$z=$i+1;
print<<<Here
<input type="hidden" name="ans$z" value="ans" id="a$z"><br>
Here;
} 


print<<<Here
<input type="submit" name="cal" value="SUBMIT" id="sb">
</form>


</div>
Here;


}

?>


<?php 

if($process==2)
print<<<Here
<div id="main6" >

<font id="sc1">YOU SCORED</font>
<font id="sc2">$score</font>

<font id="sc3">$rght<br>Right Answers</font>
<font id="sc4">$wrng<br>Wrong Answers</font>

<font id="sc5">3 #Rank</font>
 
<button id="sb1">GET ANSWERS</button> 

</div>
Here;

?>


<?php 

if($process==1)
{

print<<<Here
<div id="main4" >
Here;

for($i=0;$i<10;++$i)
{
$opc=$opt[0][$i];
$opd=$opt[1][$i];
$opa=$opt[2][$i];
$opb=$opt[3][$i];

$k=$i+1;
print<<<Here
<div class="qst" id="ques$k">

<span id="qst1" ><b>Question $k:</b><br><br>$qtn[$i]</span>

<input type="radio" name="ans" value="$opa" id="an1" onclick="assign($k,'$opa')" >
<span id="ans1">$opa</span>
<input type="radio" name="ans" value="$opb" id="an2" onclick="assign($k,'$opb')" >
<span id="ans2">$opb</span>
<input type="radio" name="ans" value="$opc" id="an3" onclick="assign($k,'$opc')" >
<span id="ans3">$opc</span>
<input type="radio" name="ans" value="$opd" id="an4" onclick="assign($k,'$opd')" >
<span id="ans4">$opd</span>
Here;


if($k==1)
print<<<Here
<button id="nxt" style="position:absolute;left:300px;" onclick="swipe1($k)">NEXT</button>
</div>
Here;
else
if($k==10)
print<<<Here
<button id="nxt" onclick="swipe1($k)">DONE</button>
<button id="pre" onclick="swipe2($k)">PREVIOUS</button>
</div>
Here;
else
print<<<Here
<button id="nxt" onclick="swipe1($k)">NEXT</button>
<button id="pre" onclick="swipe2($k)">PREVIOUS</button>
</div>
Here;

}

print<<<Here
</div>
Here;
}

?>





<div id="main1" ><div id="main11" >

<img src="images/usr.jpg" id="usr" >

<font id="txt1" ><?php print $_COOKIE['nm']; ?><br><font id="txt11" ><?php print $_COOKIE['clan']; ?><br><br>#<?php print $_COOKIE['userid']; ?></font></font>

<font id="txt2" ><b>Username<br>Age<br>Gender<br>Email Id</b></font>
<font id="txt3" ><?php print $_COOKIE['usernm']; ?><br><?php print $_COOKIE['ag']; ?><br><?php print $_COOKIE['gn']; ?><br><?php print $_COOKIE['ml']; ?></font>


</div>


<img src="images/up.jpg" id="up" >
</div>

<div id="head" >

<a href="index.php"><img src="<?php print $_SERVER[HTTP_HOST]; ?>/temp2/images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >Quiz Portal</p></a>

<div id="lg">
<a href="http://localhost/temp2/terminate.php"><font id="lg1" >LOGOUT</font></a>
<img src="images/dwn.jpg" id="dwn" >
</div></div>

<div id="foot" >
</div>

</body>
</html>