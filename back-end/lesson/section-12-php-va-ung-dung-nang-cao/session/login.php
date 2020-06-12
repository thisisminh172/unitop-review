<?php
ob_start();
session_start();
//thiet lap khi login thanh cong
$_SESSION['is_login']=true;
$_SESSION['user_login']='unitop';

header("location: index.php")

?>

