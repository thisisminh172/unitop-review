<?php
session_start();
ob_start();
#thư viện hàm
require 'data/pages.php';
require 'data/product.php';
require 'data/post.php';
require 'lib/template.php';
require 'lib/data.php';
require 'lib/url.php';
require 'lib/pages.php';
require 'lib/product.php';
require 'lib/number.php';
require 'lib/cart.php';


?>



<?php
//$page = $_GET['page'];
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
$path = "modules/{$mod}/{$act}.php";

if(file_exists($path)){
    require $path;

}else require 'inc/404.php';

?>