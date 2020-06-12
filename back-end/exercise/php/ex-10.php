<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
$error = array();
//==================
$show_gender = array(
    'male' => 'Nam',
    'female' => 'Nữ',
);

//==================
if (isset($_POST['btn_login'])) {
    if (!empty($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
        echo $fullname;
    } else {
        $error[] = "vui lòng nhập họ tên";
    }
//=================
    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
        echo $username;
    } else {
        $error[] = "vui lòng nhập tên đăng nhập";
    }
    //==============
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        echo $password;
    } else {
        $error[] = "vui lòng nhập mật khẩu";
    }
    //================
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        echo $email;
    } else {
        $error[] = "vui lòng nhập email";
    }
//================
    if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];
        echo $phone;
    } else {
        $error[] = "vui lòng nhập sdt";
    }
//=============
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    } else {
        $error[] = "vui lòng chọn giới tính";
    }

    //============

    if (!empty($error)) {
        foreach ($error as $item) {
            echo "{$item}<br>";
        }
    }
}
//===================
//Bài 3
if($_SERVER['REQUEST_METHOD']=='GET'){
    $mod = $_GET['mod'];
    $act = $_GET['act'];
    echo "{$mod} - {$act}";
}

//show_array($_SERVER);
?>
<html>
    <head>
        <title>Bài tập 10</title>
    </head>
    <body>
    <!-- ===================
    1. Bài tập 1,2
    =================== -->

        <h1>Bài tập phần 10</h1>
        <form action="" method="POST">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname"><br>
        <label for=""username>Tên đăng nhập</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phone" id="phone"><br>
        <label for="">Giới tính</label><br>
        <input type="radio" name="gender" id="male" value="male" checked="checked">Nam
        <input type="radio" name="gender" id="female" value="female">Nữ<br>

        <input type="submit" value="Submit" name="btn_login">
        </form>
        <a href="?mod=product&act=main">Sản phẩm</a>

    </body>
</html>
