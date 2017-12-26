<?php
if(!session_id())
session_start();

$check1=0;
$check2=0;




if(!empty($_POST['signup']))
{
$status=1;
if($_POST['type']=='prof')
{

if(empty($_POST['name'])||empty($_POST['sal']))
$err1="Field can't be left blank";
else
if(ereg('[a-zA-Z] ?[a-zA-Z]',$_POST['name']))
{
$len=strlen($_POST['name']);

if($len>'25')
{$err1="Character limit exceeded";}
else
{
++$check1;}
}
else
$err1="Only alphabetic characters are allowed ";


if(empty($_POST['age']))
$err2="Field can't be left blank";
else
if(ereg('[^a-zA-Z]',$_POST['age']))
{

if($_POST['age']<18)
{$err2="Age not acceptable";
}
else
if($_POST['age']>100)
{$err2="Age limit exceeded";}
else
{
++$check1;}
}
else
$err2="Only numeric characters are allowed";

if(empty($_POST['gen']))
$err3="Field can't be left blank";
else
++$check1;

if(empty($_POST['dep']))
$err4="Field can't be left blank";
else
++$check1;


if(empty($_POST['usrnme']))
$err5="Field can't be left blank";
else
if(ereg('[0-9a-zA-Z]',$_POST['usrnme']))
{

$len4=strlen($_POST['usrnme']);

if($len4>'20')
{$err5="Character limit exceeded";}
else
{


$nm=$_POST['usrnme'];

$conn=mysql_connect("localhost","","");
mysql_select_db("portal",$conn);
$sql="SELECT *FROM alpha_m3 where user_n='$nm'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

if($row['user_n'])
$err5="Username already exist";
else
++$check1;

}
}


if(empty($_POST['email']))
$err6="Field can't be left blank";
else
if(ereg('[0-9a-zA-Z]@[a-zA-Z]+\.\com$',$_POST['email']))
{
$len5=strlen($_POST['email']);


if($len5>'35')
{$err6="Characters limit exceeded";}
else
{
++$check1;}
}
else
$err6="Invalid Email Id";

/*
if(($_POST['mno'])=='+91')
$err6="Field can't be left blank";
else
if(ereg('^\+\91[0-9]{10}',$_POST['mno']))
{
$len6=strlen($_POST['mno']);


if($len6>'13')
{$err6="Invalid Mobile No.";}
else
{
++$check1;}
}
else
$err6="Invalid Mobile No.";


*/

if(empty($_POST['pass1'])||empty($_POST['pass2']))
$err7="Field can't be left blank";


if($_POST['pass1']!=$_POST['pass2'])
$err7="Password dosen't match";
else
if(!empty($_POST['pass1'])&&!empty($_POST['pass2']))
{
if(ereg('^[^0-9][0-9a-zA-Z]',$_POST['pass2']))
{
$len7=strlen($_POST['pass2']);

if($len7<'8')
{$err7="Password must contain atleast 8 characters";}
else
{
++$check1;}}
else
{$err7="Password must start with an alphabet";}

}

}


if($check1==7)
{
$name3=$_POST['sal']." ".$_POST['name'];

setcookie('type',$_POST['type']);
setcookie('name',$name3);
setcookie('age',$_POST['age']);
setcookie('gen',$_POST['gen']);
setcookie('sect',$_POST['dep']);
setcookie('usrnme',$_POST['usrnme']);
setcookie('email',$_POST['email']);
$_SESSION['pass']=$_POST['pass2'];


$_SESSION['img']=rand(202,250)*1544;
header('location:signup2.php');

}

}





if(!empty($_POST['signup2']))
{
$status=2;
if($_POST['type']=='stud')
{

if(empty($_POST['name2']))
$err1="Field can't be left blank";
else
if(ereg('[a-zA-Z] ?[a-zA-Z]',$_POST['name2']))
{
$len=strlen($_POST['name']);

if($len>'25')
{$err1="Character limit exceeded";}
else
{
++$check2;}
}
else
$err1="Only alphabetic characters are allowed ";


if(empty($_POST['age2']))
$err2="Field can't be left blank";
else
if(ereg('[^a-zA-Z]',$_POST['age2']))
{

if($_POST['age2']<18)
{$err2="Age not acceptable";
}
else
if($_POST['age2']>100)
{$err2="Age limit exceeded";}
else
{
++$check2;}
}
else
$err2="Only numeric characters are allowed";

if(empty($_POST['gen2']))
$err3="Field can't be left blank";
else
++$check2;

if(empty($_POST['brnch']))
$err4="Field can't be left blank";
else
++$check2;


if(empty($_POST['usrnme2']))
$err5="Field can't be left blank";
else
if(ereg('[0-9]{10}',$_POST['usrnme2']))
{

$len4=strlen($_POST['usrnme2']);

if($len4>'10')
{$err5="Invalid student Id";}
else
{

$nm=$_POST['usrnme'];

$conn=mysql_connect("localhost","","");
mysql_select_db("portal",$conn);
$sql="SELECT *FROM alpha_m3 where user_n='$nm'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

if($row['user_n'])
$err5="Username already exist";
else
++$check2;

}
}
else
$err5="Invalid student Id";


if(empty($_POST['email2']))
$err6="Field can't be left blank";
else
if(ereg('[0-9a-zA-Z]@[a-zA-Z]+\.\com$',$_POST['email2']))
{
$len5=strlen($_POST['email']);


if($len5>'35')
{$err6="Characters limit exceeded";}
else
{
++$check2;}
}
else
$err6="Invalid Email Id";

/*
if(($_POST['mno'])=='+91')
$err6="Field can't be left blank";
else
if(ereg('^\+\91[0-9]{10}',$_POST['mno']))
{
$len6=strlen($_POST['mno']);


if($len6>'13')
{$err6="Invalid Mobile No.";}
else
{
++$check2;}
}
else
$err6="Invalid Mobile No.";


*/

if(empty($_POST['pass12'])||empty($_POST['pass22']))
$err7="Field can't be left blank";


if($_POST['pass12']!=$_POST['pass22'])
$err7="Password dosen't match";
else
if(!empty($_POST['pass12'])&&!empty($_POST['pass22']))
{
if(ereg('^[^0-9][0-9a-zA-Z]',$_POST['pass22']))
{
$len7=strlen($_POST['pass22']);

if($len7<'8')
{$err7="Password must contain atleast 8 characters";}
else
{
++$check2;}}
else
{$err7="Password must start with an alphabet";}

}

}


if($check2==7)
{

setcookie('type',$_POST['type']);
setcookie('name',$name2);
setcookie('age',$_POST['age2']);
setcookie('gen',$_POST['gen2']);
setcookie('sect',$_POST['brnch']);
setcookie('usrnme',$_POST['usrnme2']);
setcookie('email',$_POST['email2']);
$_SESSION['pass']=$_POST['pass22'];


$_SESSION['img']=rand(202,250)*1544;
header('location:signup2.php');

}


}




$img=$_SESSION['img'];




if(!empty($_POST['verify']))
{

if(empty($_POST['pin']))
$err1="Field can't be left blank";
else
if(ereg('[0-9]{4}',$_POST['pin']))
{

$len4=strlen($_POST['pin']);

if($len4!='4')
{$err5="Ivalid pin";}
else
{
if($_POST['ver']!=$img&&!empty($_POST['ver']))
$err2="Incorrect verifying code";
else
if(empty($_POST['ver']))
$err2="Enter verification code";
else
if($_POST['ver']==$img&&!empty($_POST['ver']))
{
$_SESSION['pin']=$_POST['pin'];
header('location:red.php');
}}
}
else
$err1="Invalid pin";

}




?>