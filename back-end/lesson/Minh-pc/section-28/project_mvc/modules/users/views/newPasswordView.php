<html>

<head>
    <title>Thiết lập mật khẩu mới</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
    <h1 class="page-title">Mật khẩu</h1>
        <form action="" id="form-login" method="POST">
            <input type="password" name="password" id="password" placeholder="Password mới"
                value="<?php echo set_value('password'); ?>">
            <?php echo form_error('password'); ?>
            <input type="submit" id="btn_login" name="btn_new_pass" value="Lưu mật khẩu">

        </form>
        <a href="?mod=users&action=login" id="lost-pass">Đăng nhập</a> |
        <a href="?mod=users&controller=index&action=reg" id="lost-pass">Đăng ký</a>

    </div>
</body>

</html>