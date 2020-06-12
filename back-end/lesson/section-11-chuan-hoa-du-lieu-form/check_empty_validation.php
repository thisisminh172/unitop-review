<?php
require 'lib/validation.php';
    if(isset($_POST['btn_login'])){
        $error= array();//phất cờ
        if(empty($_POST['username'])){
            $error['username']="không được để trống username";//hạ cờ
        }
        else{
            $username= $_POST['username'];
        }
        if (empty($_POST['password'])) {
            $error['password'] = "không được để trống password"; //hạ cờ
        } else {
            $password = $_POST['password'];
        }
        //kết luận
        if(empty($error)){
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
        <?php echo form_error('password');?>

        <br>
        <input type="submit" value="Login" name="btn_login">
        </form>
    </body>
</html>