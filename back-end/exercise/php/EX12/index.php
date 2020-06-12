
<?php
ob_start();
function redirect_to($url){
    if(!empty($url)){
        header("location: {$url}");
    }
}
//$is_login = true;
if(!isset($is_login)){
    redirect_to('login.php');
}
require 'inc/header.php'
?>
<div id="content">
    CONTENT
</div>
<?php
require 'inc/footer.php'
?>
