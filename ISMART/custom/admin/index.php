<?php
require "layout/header.php";
?>
<?php

$page = !empty($_GET['page'])?$_GET['page']:'dashboard';
$path = "pages/{$page}.php";

if(file_exists($path)){
    require $path;

}else require 'layout/404.php';

?>
<?php
require "layout/footer.php";
?>