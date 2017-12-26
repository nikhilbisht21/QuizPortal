<?php
session_start();



include('engine/main/index.php');

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

<link rel="stylesheet" type="text/css" href="prop/p.index.css" media="all" />

</head>
<body>

<div id="main2" >

<span id="main21" >User's database</span>
<a href="adm2.php"><span id="main22" >Post question</span></a>
<a href="adm3.php"><span id="main23" >Review question</span></a>
<a href="adm4.php"><span id="main24" >Message Database</span></a>
<a href="adm5.php"><span id="main25" >Rank List</span></a>

</div>


<div id="main4" >

<div id="opt" >
<span id="opt1" style="background:dimgrey;" >STUDENTS</span>
<span id="opt2" style="background:#00bfff;" >PROFESSORS</span>
<span id="opt3" " ><?php 

if(!isset($_COOKIE['err']))
print "TO DELETE RECORD CLICK ON IT";
else
if(isset($_COOKIE['err']))
{print $_COOKIE['err'];
}

?>

</font>
</div>



<div id="main5" >

<span id="mn51" >USER ID</span>
<span id="mn52" >NAME</span>
<span id="mn53" >AGE</span>

<span id="mn54" >GENDER</span>
<span id="mn55" >Email</span>

<span id="mn56" >USER FI</span>
<span id="mn57" >USERNAME</span>
<span id="mn58" >PASSWORD</span>
<span id="mn59" >PIN</span>

<span id="mn60" >DATE/TIME</span>


<?php
$t=40;

for($i=0;$i<$l;++$i)
{
$tp=$t."px";

print<<<Here
<div id="mg" onclick="location.href='red5.php?recv=$s_id[$i]&new=$s_uf[$i]'" style="position:absolute;top:$t;">

<span id="mg1" >$s_id[$i]</span>
<span id="mg2" >$s_name[$i]</span>
<span id="mg3" >$s_age[$i]</span>
<span id="mg4" >$s_gen[$i], $in_tt[$i]</span>
<span id="mg5" >$s_mail[$i]</span>
<span id="mg6" >$s_uf[$i]</span>
<span id="mg7" >$s_un[$i], $in_tt[$i]</span>
<span id="mg8" >$s_pass[$i]</span>
<span id="mg9" >$s_pin[$i]</span>
<span id="mg10" >$s_dd[$i], $s_tt[$i]</span>


</div>
Here;

$t=$t+35;
}

?>

</div>




<div id="main6" >

<span id="mn51" >USER ID</span>
<span id="mn52" >NAME</span>
<span id="mn53" >AGE</span>

<span id="mn54" >GENDER</span>
<span id="mn55" >Email</span>

<span id="mn56" >USER FI</span>
<span id="mn57" >USERNAME</span>
<span id="mn58" >PASSWORD</span>
<span id="mn59" >PIN</span>

<span id="mn60" >DATE/TIME</span> 

<?php
$t=40;

for($i=0;$i<$m;++$i)
{
$tp=$t."px";

print<<<Here
<div id="mg" onclick="location.href='red5.php?recv=$p_id[$i]&new=$p_uf[$i]'" style="position:absolute;top:$t;">


<span id="mg1" >$p_id[$i]</span>
<span id="mg2" >$p_name[$i]</span>
<span id="mg3" >$p_age[$i]</span>
<span id="mg4" >$p_gen[$i], $in_tt[$i]</span>
<span id="mg5" >$p_mail[$i]</span>
<span id="mg6" >$p_uf[$i]</span>
<span id="mg7" >$p_un[$i], $in_tt[$i]</span>
<span id="mg8" >$p_pass[$i]</span>
<span id="mg9" >$p_pin[$i]</span>
<span id="mg10" >$p_dd[$i], $p_tt[$i]</span>

</div>
Here;

$t=$t+35;
}

?>

</div>



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