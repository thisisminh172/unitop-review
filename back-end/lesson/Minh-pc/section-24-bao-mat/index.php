<?php
require 'db/connect.php';
?>


<?php
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM `tbl_users` WHERE `username`='" . mysqli_real_escape_string($conn,$username) . "' AND `password` = '" . mysqli_real_escape_string($conn,$password) . "'";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Bạn được phép đăng nhập";
    } else {
        echo "Thông tin đăng nhập không hợp lệ";
    }
}
?>

<html>
<head>
    <title>SQL injection</title>
</head>
<body>
    <style>
        label, input{
            display:block;
        }
    </style>
    <h1>Đăng nhập tài khoản</h1>
    <form action="" method="POST">
        <label for="">Username</label>
        <input type="text" name="username" id="username">
        <label for="">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Đăng nhập" name="btn_login">
    </form>
</body>


</html>
