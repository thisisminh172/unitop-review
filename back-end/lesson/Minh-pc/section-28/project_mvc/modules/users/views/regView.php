<html>

<head>
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1 class="page-title">ĐĂNG KÝ</h1>
        <form action="" id="form-login" method="POST">
            <input type="text" name="fullname" id="fullname" placeholder="Họ và tên" value="<?php echo set_value('fullname') ?>">
            <?php echo form_error('fullname'); ?>
            <input type="text" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>">
            <?php echo form_error('email'); ?>
            <input type="text" name="username" id="username" placeholder="Tên đăng nhập" value="<?php echo set_value('username') ?>">
            <?php echo form_error('username'); ?>
            <input type="password" name="password" id="password" placeholder="Mật khẩu">
            <?php echo form_error('password'); ?>

            <input type="submit" value="Đăng ký" name="btn_reg">
            <?php echo form_error('account'); ?>

        </form>
        <a href="?mod=users&controller=index&action=login" id="lost-pass">Đăng nhập</a><br>
        <!-- <a href="" id="lost-pass">Quên mật khẩu</a> -->

    </div>
</body>

</html>