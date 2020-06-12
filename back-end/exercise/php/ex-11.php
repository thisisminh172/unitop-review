<?php
require "lib/validation.php";
if(isset($_POST['btn_reg'])){
    $error = array();
    if(empty($_POST['fullname'])){
        $error['fullname']="Vui lòng nhập họ tên";
    }else{
        if(is_fullname($_POST['fullname'])){
            $fullname = $_POST['fullname'];
        }else{
            $error['fullname']="gồm các ký tự từ a-z";
        }
    }
    //=========================================
    if (empty($_POST['username'])) {
    $error['username'] = "Vui lòng nhập username";
} else {
    if (is_username($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $error['username'] = "gồm các ký tự từ a-z c 6-32 ký tự";
    }
}
//=========================================

if (empty($_POST['password'])) {
    $error['password'] = "Vui lòng nhập password";
} else {
    if (is_password($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $error['password'] = "gồm chữ cái đầu in HOA,gồm các ký tự dac biet va ky tu từ a-z";
    }
}
//=========================================

if (empty($_POST['phone'])) {
    $error['phone'] = "Vui lòng nhập sdt";
} else {
    if (is_phone($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $error['phone'] = "gồm 9-12 số";
    }
}

}
?>

<html>
    <head>
        <title>Exercise 11</title>
    </head>
    <body>
        <style>
            .error{
                color:red;
            }
        </style>
        <h1>Exercise 11</h1>
        <form action="" method="post">
            <label for="fullname">fullname</label>
            <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>">
            <?php echo form_error('fullname') ?>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>">
            <?php echo form_error('username') ?>

            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <?php echo form_error('password') ?>

            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="<?php echo set_value('phone') ?>">
            <?php echo form_error('phone') ?>

            <input type="submit" value="Register" name="btn_reg">
        </form>
    </body>
</html>