<?php
session_start();

if(isset($_GET['recv']))
{

$_SESSION['mno']=$_GET['recv'];
$_SESSION['sts']=$_GET['new'];
header('location:prof6.php');
}
else
{header('location:prof3.php');}

?>
