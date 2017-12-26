<?php
session_start();

include('engine/main/adm2.php');
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




</script>
<head>

<link rel="stylesheet" type="text/css" href="prop/p.adm2.css" media="all" />

</head>
<body>

<div id="main2" >

<a href="index.php"><span id="main21" >User's database</span></a>
<span id="main22" >Post question</span>
<a href="adm3.php"><span id="main23" >Review question</span></a>
<a href="adm4.php"><span id="main24" >Message Database</span></a>
<a href="adm5.php"><span id="main25" >Rank List</span></a>

</div>

<div id="main3" >

<font id="fl1">Subject<br><br><br>Difficluty level</font>
<font id="fl2">Answer<br><br><br><br><br>#Option 2</font>
<font id="fl21">#Option 1<br><br><br><br><br>#Option 3</font>

<p id="err1" style="color:dimgrey;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:500px;line-height:50px;" >
<?php print $err1; ?></p>


<form method="post" action="" style="position:absolute;">

<select id="field1" name="sbj" >
<option>  </option>
<option value="Maths">Maths</option>
<option value="Science">Science</option>
<option value="History">History</option>
</select>


<select id="field2" name="dif" >
<option>     </option>
<option value="1" >Easy</option>
<option value="2" >Medium</option>
<option value="3" >Hard</option>
</select>
           
<textarea id="field4" rows="3" cols="50" name="qstn" wrap="hard" placeholder="Enter question here" >
</textarea>

<input id="field5"
           type="text"
           name="ansa"
           value="" >

<input id="field6"
           type="text"
           name="ansb"
           value="" >

<input id="field7"
           type="text"
           name="ansc"
           value="" >

<input id="field8"
           type="text"
           name="ansd"
           value="" >
       
<input type="submit"
           name="post1"
           value="POST"
             id="fl3"  >

</form>


</div>


<div id="main4" >

<font id="q8">Subject</font>

<div id="main5" >

<span id="q1">Question</span>
<span id="q2">Difficulty</span>
<span id="q3">Answer</span><span id="q4">#Option 1</span><span id="q5">#Option 2</span><span id="q6">#Option 3</span>

<form method="post"
         action="" style="position:absolute;" id="q111">

<select id="q9" name="sub">
<option>     </option>
<option value="1" >MEchanical</option>
<option value="2" >Science</option>
<option value="3" >Hard</option>
</select>

<?php

$t=50;

for($i=0;$i<6;++$i)
{
$tp=$t."px";

print<<<Here
<textarea id="q11" rows="3" cols="50" name="qn[$i]" wrap="hard" placeholder="Enter question here" style="position:absolute;top:$tp;" >
</textarea>


<select id="q22" name="difc[$i]" style="position:absolute;top:$tp;">
<option>     </option>
<option value="1" >Easy</option>
<option value="2" >Medium</option>
<option value="3" >Hard</option>
</select>

<input id="q33"
           type="text"
           name="an[$i]"
           value="" style="position:absolute;top:$tp;">

<input id="q44"
           type="text"
           name="op1[$i]"
           value="" style="position:absolute;top:$tp;">

<input id="q55"
           type="text"
           name="op2[$i]"
           value="" style="position:absolute;top:$tp;">

<input id="q66"
           type="text"
           name="op3[$i]"
           value="" style="position:absolute;top:$tp;">

Here;

$t=$t+40;
}       




?>
       
<input type="submit"
           name="post2"
           value="POST"
             id="q77"  >

</form>

</div>

</div>


















<div id="q99" >
<span id="q91" style="background:grey;" >Single</span>
<span id="q92" style="background:#00bfff;" >Multiple</span>
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