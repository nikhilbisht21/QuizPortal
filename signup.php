<?php
session_start();
$_SESSION['stats']=0;

include('engine/e.signup.m.php');
?>
<html>
<title>Quiz Portal</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" >

tp1=55+"%";
tp2=10+"%";

$(document).ready(function(){
    $("#fac").click(function(){
$("#main1").fadeIn();
$("#wel").hide();
$("#mn1").hide();
$("#mn2").hide();
$("#stu").hide();



$("#fac").animate({left:tp1},700);
$("#fac").animate({top:tp2},700);



});
});


$(document).ready(function(){
    $("#stu").click(function(){
$("#main2").fadeIn();
$("#wel").hide();
$("#mn1").hide();
$("#mn2").hide();
$("#fac").hide();


$("#stu").animate({left:tp1},700);
$("#stu").animate({top:tp2},700);

});
});


</script>

<head>

<link rel="stylesheet" type="text/css" href="prop/p.signup.css" media="all" />

</head>
<body>

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >Quiz Portal</p></a>
</div>


<div id="main"  >

<?php


if(empty($status))
{


print<<<Here
<div id="main3"  style="display:block;">
 
<font id="wel">Register as a</font>

<img src="images/usr.jpg" id="fac" ></a>
<img src="images/usrl.jpg" id="stu" ></a>

<font id="mn1">Professor</font>
<font id="mn2">Student</font>

</div>

<div id="main1"  style="display:none;">

<p id="txt1"  color="black" face="corbel" >Name</p>
<p id="txt2"  color="black" face="corbel" >Age</p>
<p id="txt3"  color="black" face="corbel" >Gender</p>
<p id="txt4"  color="black" face="corbel" >Department</p>
<p id="txt5"  color="black" face="corbel" >Username</p>
<p id="txt6"  color="black" face="corbel" >Email</p>
<p id="txt7"   face="corbel" color="black" >Password</p>
<p id="txt8"  face="corbel" color="black" >Re-Enter Password</p>



<p id="err1" style="color:dimgrey;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:450px;line-height:50px;" >
$err1
<br>$err2
<br>$err3
<br>$err4 
<br>$err5 
<br>$err6 
<br>$err7 
</p>


<form method="post"
         action="" style="position:absolute;">

<input 
           type="hidden"
           name="type"
           value="prof" >

<input id="field13"
           type="text"
           name="name"
           value="$name" >

<select id="field11" name="sal" >
<option>     </option>
<option value="Mr." >Mr.</option>
<option value="Ms." >Ms.</option>
<option value="Mrs." >Mrs.</option>
<option value="Doc." >Doc.</option>
<option value="Prof." >Prof.</option>
</select>

<input id="field2"
           type="text"
           name="age"
           value="$age" >

<select id="field12" name="gen" >
<option>     </option>
<option value="Male" >Male</option>
<option value="Female" >Female</option>
</select>

<select id="field3" name="dep" >
<option>    </option>
<option value="CSE" >CSE</option>
<option value="ME" >ME</option>
<option value="CE" >CE</option>
<option value="ECE" >ECE</option>
<option value="EE" >prof.</option>
</select>

<input id="field4"
           type="text"
           name="usrnme"
value="$usrnme" >
           

<input id="field5"
           type="text"
           name="email"
           value="$email" placeholder="@mail.com">

<input  id="field6"  onkeypress="check_v()" 
           type="password"
           name="pass1"
           value="" >
            
<input  id="field7"
           type="password"
           name="pass2"
           value="" >
            
<input type="submit"
           name="signup"
           value="REGISTER"
             id="sb"  >

</form>

</div>



<div id="main2" style="display:none;" >

<p id="txt1"  color="black" face="corbel" >Name</p>
<p id="txt2"  color="black" face="corbel" >Age</p>
<p id="txt3"  color="black" face="corbel" >Gender</p>
<p id="txt4"  color="black" face="corbel" >Branch</p>
<p id="txt5"  color="black" face="corbel" >Student Id</p>
<p id="txt6"  color="black" face="corbel" >Email</p>
<p id="txt7"   face="corbel" color="black" >Password</p>
<p id="txt8"  face="corbel" color="black" >Re-Enter Password</p>



<p id="err1" style="color:dimgrey;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:380px;line-height:50px;" >
$err1
<br>$err2
<br>$err3
<br>$err4 
<br>$err5 
<br>$err6 
<br>$err7 
</p>

<form method="post"
         action="" >

<input 
           type="hidden"
           name="type"
           value="stud" >

<input id="field1"
           type="text"
           name="name2"
           value="$name2" >

<input id="field2"
           type="text"
           name="age2"
           value="$age2" >

<select id="field12" name="gen2" >
<option>     </option>
<option value="Male" >Male</option>
<option value="Female" >Female</option>
</select>

<select id="field3" name="brnch" >
<option>    </option>
<option>    </option>
<option value="CSE" >CSE</option>
<option value="ME" >ME</option>
<option value="CE" >CE</option>
<option value="ECE" >ECE</option>
<option value="EE" >prof.</option>
</select>

<input id="field4"
           type="text"
           name="usrnme2"
value="$usrnme2" placeholder="eg. 1501021082">
           

<input id="field5"
           type="text"
           name="email2"
           value="$email2" placeholder="@mail.com">

<input  id="field6"  onkeypress="check_v()" 
           type="password"
           name="pass12"
           value="" >
            
<input  id="field7"
           type="password"
           name="pass22"
           value="" >
            
<input type="submit"
           name="signup2"
           value="REGISTER"
             id="sb"  >

</form>

</div>
Here;
}


if($status==1)
{


print<<<Here
<div id="main1"  style="display:block;">

<p id="txt1"  color="black" face="corbel" >Name</p>
<p id="txt2"  color="black" face="corbel" >Age</p>
<p id="txt3"  color="black" face="corbel" >Gender</p>
<p id="txt4"  color="black" face="corbel" >Department</p>
<p id="txt5"  color="black" face="corbel" >Username</p>
<p id="txt6"  color="black" face="corbel" >Email</p>
<p id="txt7"   face="corbel" color="black" >Password</p>
<p id="txt8"  face="corbel" color="black" >Re-Enter Password</p>



<p id="err1" style="color:dimgrey;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:450px;line-height:50px;" >
$err1
<br>$err2
<br>$err3
<br>$err4 
<br>$err5 
<br>$err6 
<br>$err7 
</p>


<form method="post"
         action="" style="position:absolute;">

<input 
           type="hidden"
           name="type"
           value="prof" >

<input id="field13"
           type="text"
           name="name"
           value="$name" >

<select id="field11" name="sal" >
<option>     </option>
<option value="1" >Mr.</option>
<option value="2" >Ms.</option>
<option value="2" >Mrs.</option>
<option value="3" >dtr.</option>
<option value="2" >prof.</option>
</select>

<input id="field2"
           type="text"
           name="age"
           value="$age" >

<select id="field12" name="gen" >
<option>     </option>
<option value="Male" >Male</option>
<option value="Female" >Female</option>
</select>

<select id="field3" name="dep" >
<option>    </option>
<option value="1" >Computer Science</option>
<option value="2" >Ms.</option>
<option value="2" >Mrs.</option>
<option value="2" >dtr.</option>
<option value="2" >prof.</option>
</select>

<input id="field4"
           type="text"
           name="usrnme"
value="$usrnme" >
           

<input id="field5"
           type="text"
           name="email"
           value="$email" placeholder="@mail.com">

<input  id="field6"  onkeypress="check_v()" 
           type="password"
           name="pass1"
           value="" >
            
<input  id="field7"
           type="password"
           name="pass2"
           value="" >
            
<input type="submit"
           name="signup"
           value="REGISTER"
             id="sb"  >

</form>

</div>
Here;
}





if($status==2)
{
print<<<Here
<div id="main2" style="display:block;" >

<p id="txt1"  color="black" face="corbel" >Name</p>
<p id="txt2"  color="black" face="corbel" >Age</p>
<p id="txt3"  color="black" face="corbel" >Gender</p>
<p id="txt4"  color="black" face="corbel" >Branch</p>
<p id="txt5"  color="black" face="corbel" >Student Id</p>
<p id="txt6"  color="black" face="corbel" >Email</p>
<p id="txt7"   face="corbel" color="black" >Password</p>
<p id="txt8"  face="corbel" color="black" >Re-Enter Password</p>



<p id="err1" style="color:dimgrey;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:380px;line-height:50px;" >
$err1
<br>$err2
<br>$err3
<br>$err4 
<br>$err5 
<br>$err6 
<br>$err7 
</p>

<form method="post"
         action="" >

<input 
           type="hidden"
           name="type"
           value="stud" >

<input id="field1"
           type="text"
           name="name2"
           value="$name2" >

<input id="field2"
           type="text"
           name="age2"
           value="$age2" >

<select id="field12" name="gen2" >
<option>     </option>
<option value="Male" >Male</option>
<option value="Female" >Female</option>
</select>

<select id="field3" name="brnch" >
<option>    </option>
<option value="1" >Computer Science</option>
<option value="2" >Ms.</option>
<option value="2" >Mrs.</option>
<option value="2" >dtr.</option>
<option value="2" >prof.</option>
</select>

<input id="field4"
           type="text"
           name="usrnme2"
value="$usrnme2" placeholder="eg. 1501021082">
           

<input id="field5"
           type="text"
           name="email2"
           value="$email2" placeholder="@mail.com">

<input  id="field6"  onkeypress="check_v()" 
           type="password"
           name="pass12"
           value="" >
            
<input  id="field7"
           type="password"
           name="pass22"
           value="" >
            
<input type="submit"
           name="signup2"
           value="REGISTER"
             id="sb"  >

</form>

</div>
Here;
}






?>




</div>



<div id="foot" ></div>

</body>
</html>