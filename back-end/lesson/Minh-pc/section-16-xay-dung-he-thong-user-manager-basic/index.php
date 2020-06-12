
<?php
session_start();
ob_start();

require 'lib/data.php';
require 'data/users.php';
require 'data/post.php';
require 'lib/users.php';
require 'lib/template.php';
require 'lib/url.php';



//require 'inc/header.php';
// get_header();
?>

<?php


//$page = $_GET['page'];
$page = !empty($_GET['page'])?$_GET['page']:'home';
$path = "pages/{$page}.php";

//Kiểm tra login
if(!is_login() && $page!= 'login'){
    redirect('?page=login');
}
//echo $path;
if(file_exists($path)){
    require $path;

}else require 'inc/404.php';

?>

<?php
//require 'inc/footer.php';
// get_footer();
?>
   