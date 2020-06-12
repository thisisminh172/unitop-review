<html>

<head>
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1 class="page-title">ĐĂNG NHẬP</h1>
        <form action="" id="form-login" method="POST">
            <input type="text" name="username" id="username" placeholder="Username" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username']; } ?>">
            <?php echo form_error('username'); ?>
            <input type="password" name="password" id="password" placeholder="Password"  value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; } ?>">
            <?php echo form_error('password'); ?>
            <input type="checkbox" name="ck_remember" id="ck_remember">
            <label for="ck_remember" class="text-grey" >Remember me</label>
            <input type="submit" id="btn_login" name="btn_login" value="Đăng nhập">
            <?php echo form_error('account'); ?>

        </form>
        <a href="?mod=users&action=reset" id="lost-pass">Quên mật khẩu</a> |
        <a href="?mod=users&controller=index&action=reg" id="lost-pass">Đăng ký</a>

    </div>
</body>

</html>