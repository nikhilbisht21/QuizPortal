<?php
session_start();

if(!isset($_COOKIE['userid'])||$_COOKIE['ty']!='prof')
{header('location:http://localhost/temp2/terminate.php');}
else
if(!isset($_COOKIE['nm']))
{header('location:http://localhost/temp2/fetch.php');}

include('engine/main/prof22.php');

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

<link rel="stylesheet" type="text/css" href="prop/p.prof22.css" media="all" />

</head>
<body>

<div id="main2" >


<a href="index.php"><span id="main21" >Post your question</span></a>
<span id="main22" >Review questions</span>
<a href="prof3.php"><span id="main23" >Messages</span></a>
<a href="prof4.php"><span id="main24" >Students Rank</span></a>

</div>

<?php

if($status==0)
{
print<<<Here
<div id="main3" style="display:block;">

<p id="err1" style="color:dimgrey;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:500px;line-height:50px;" >
$err1</p>

<font id="fl1">Subject<br><br><br>Difficluty level</font>
<font id="fl2">Answer<br><br><br><br><br>#Option 1</font>
<font id="fl21">#Option 2<br><br><br><br><br>#Option 4</font>


<form method="post"
         action="" style="position:absolute;">

<select id="field1" name="sbj" >
<option  value="2" >$sbjct</option>
<option> </option>
<option value="1" >MEchanical</option>
<option value="2" >Medium</option>
<option value="3" >Hard</option>
</select>


<select id="field2" name="dif" >
<option >$lvl</option>
<option value="1" >Easy</option>
<option value="2" >Medium</option>
<option value="3" >Hard</option>
</select>
           
<textarea id="field4" rows="3" cols="50" name="qstn" wrap="hard"  placeholder="Enter question here" >
$qtn</textarea>

<input id="field5"
           type="ansa"
           name="ansa"
           value="$ans" >

<input id="field6"
           type="ansb"
           name="ansb"
           value="$opt1" >

<input id="field7"
           type="text"
           name="ansc"
           value="$opt2" >

<input id="field8"
           type="text"
           name="ansd"
           value="$opt3" >
       
<input type="submit"
           name="save"
           value="SAVE CHANGES"
             id="fl3"  >

</form>

<input type="submit"
           name="can"
           value="CANCEL"
             id="fl4"  onclick="location.href='prof1.php'">

<form method="post" action="">
<input type="submit"
           name="del"
           value="DELETE"
             id="fl5"  >
</form>

</div>
Here;

}
else
if($status==1)
print<<<Here
<div id="main4" style="display:block;"> 
<font id="mn41" >$err1</font>
<button id="mn42" onclick="location.href='prof2.php'">CONTINUE</button>
</div>
Here;

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