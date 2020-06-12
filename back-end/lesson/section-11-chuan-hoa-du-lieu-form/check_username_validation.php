<?php
require 'lib/validation.php';
if(isset($_POST['btn_login'])){
    $error = array();
    if(empty($_POST['username'])){
        $error['username'] = "không được để trống phần username.";
    }else {
        if(!(strlen($_POST['username'])>=6 && strlen($_POST['username'])<=32)){
            $error['username']="Username phải có từ 6 đến 32 ký tự";
        }else{
            $pattern = "/^[a-zA-Z0-9_\.]{6,32}$/";
            if (!is_username($_POST['username'])) {
            $error['username'] = "Username cho phép sử dụng ký tự, chữ số,dấu chấm, dấu gạch dưới";
            } else {
            $username = $_POST['username'];
            echo $username;
            }

        }
        
    }
    if (empty($_POST['password'])) {
    $error['password'] = "không được để trống password"; //hạ cờ
    } else {
    $password = $_POST['password'];
    }
//kết luận
    if (empty($error)) {
    //xử lý không có  lỗi
    echo "Username = {$username}<br>Password = {$password}";
    }


}
?>

<html>
    <head>
        <title>Chuẩn hóa dữ liệu form đăng nhập</title>
    </head>
    <body>
        <style>
            .error{
                color:red;
            }
        </style>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <?php echo form_error('username'); ?>
        <label for="password">password</label><br>
        <input type="password" name="password" id="password"><br>
        <?php echo form_error('password'); ?></p><br>
        <input type="submit" value="Login" name="btn_login">
        </form>
    </body>
</html>