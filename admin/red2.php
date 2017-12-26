<?php
session_start();

$_SESSION['qno']=$_POST['qno'];
{header('location:adm33.php');}


?>