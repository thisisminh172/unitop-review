<?php
//ob_start();
session_start();

print_r($_SESSION);
echo "trang chủ<br>";
if(!isset($_SESSION['is_login'])){
    header("location: login.php");
}else{
    echo $_SESSION['user_login'];

}
?>
<html>
<a href="logout.php">Dăng xuất</a>
</html>