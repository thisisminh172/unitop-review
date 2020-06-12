
<?php
require 'data/post.php';
require 'lib/template.php';
require 'lib/data.php';

//require 'inc/header.php';
get_header();
?>

<?php
//$page = $_GET['page'];
$page = !empty($_GET['page'])?$_GET['page']:'home';
$path = "pages/{$page}.php";
//echo $path;
if(file_exists($path)){
    require $path;

}else require 'inc/404.php';

?>

<?php
//require 'inc/footer.php';
get_footer();
?>
   