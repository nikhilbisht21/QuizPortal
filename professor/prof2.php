<?php
session_start();

if(!isset($_COOKIE['userid'])||$_COOKIE['ty']!='prof')
{header('location:http://localhost/temp2/terminate.php');}
else
if(!isset($_COOKIE['nm']))
{header('location:http://localhost/temp2/fetch.php');}

include('engine/main/prof2.php');

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

<link rel="stylesheet" type="text/css" href="prop/p.prof2.css" media="all" />

</head>
<body>

<div id="main2" >

<a href="index.php"><span id="main21" >Post your question</span></a>
<span id="main22" >Review questions</span>
<a href="prof3.php"><span id="main23" >Messages</span></a>
<a href="prof4.php"><span id="main24" >Students Rank</span></a>

</div>




<div id="main3" >

<font id="sb3" >Subject</font>

<p id="err1" style="color:dimgrey;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:10px;left:450px;line-height:50px;" >
<?php print $err1; ?></p>

<form method="post" action="">
<select name="subj" id="sb1" >
<option>  </option>
<option value="Maths">Maths</option>
<option value="Science">Science</option>
<option value="History">History</option>
</select> 

<input type="submit" name="sub" value="GO" id="sb2" >
</form>

<div id="q111" style="border:2px solid dimgrey; ">
<span id="q1">Question</span>
<span id="q2">Difficulty</span>
<span id="q3">Answer</span><span id="q4">#Option 1</span><span id="q5">#Option 2</span><span id="q6">#Option 3</span>

<?php

$t=50;

for($i=0;$i<$l;++$i)
{
$tp=$t."px";
$j=$i+1;

print<<<Here

<form method="post" action="red2.php">
<input type="hidden" name="qno" value="$qid[$i]"> 
<input type="submit" name="edit" value="EDIT" id="q01"  style="position:absolute;top:$tp;" >
</form>

<span id="q11"  style="position:absolute;top:$tp;" ><b>Ques $j:</b> $qtn[$i]</span>

<span id="q22" style="position:absolute;top:$tp;">$lvl[$i]</span>

<span id="q33" style="position:absolute;top:$tp;">$ans[$i]</span>

<span id="q44" style="position:absolute;top:$tp;">$opt1[$i]</span>

<span id="q55" style="position:absolute;top:$tp;">$opt2[$i]</span>

<span id="q66" style="position:absolute;top:$tp;">$opt3[$i]</span>

Here;

$t=$t+60;
}       




?>
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