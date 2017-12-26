<?php
session_start();


include('engine/main/adm3.php');

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

<link rel="stylesheet" type="text/css" href="prop/p.adm3.css" media="all" />

</head>
<body>

<div id="main2" >

<a href="index.php"><span id="main21" >User's database</span></a>
<a href="adm2.php"><span id="main22" >Post question</span></a>
<span id="main23" >Review question</span>
<a href="adm4.php"><span id="main24" >Message Database</span></a>
<a href="adm5.php"><span id="main25" >Rank List</span></a>

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