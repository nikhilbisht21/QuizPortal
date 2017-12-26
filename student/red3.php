<?php
session_start();

if(isset($_GET['recv']))
{

$_SESSION['mno']=$_GET['recv'];
$_SESSION['sts']=$_GET['new'];
header('location:stud6.php');
}
else
{header('location:stud3.php');}

/*
<form method="get" action="">
<input type="text" name="recv" value="<?php print $recv; ?>">
<input type="submit" name="new" value="" id="mn75">
</form>


$srvr=$_SERVER['REQUEST_URI'];
print $srvr;

*/




?>
