<?php
$user=(isset($_POST['User']))?$_POST['User']:'';
$pass=(isset($_POST['pass']))?$_POST['pass']:'';
if(!isset($_SESSION))session_start();
if($user=='admin'&&$pass=='123456')
{   $_SESSION['admin']=$user;
    header('location:admin.php');
    exit;
}
else
{
    header('location:login.html');
}
