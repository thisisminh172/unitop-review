<html>

<head>
    <title>Khôi phục mật khẩu</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1 class="page-title">Khôi phục mật khẩu</h1>
        <form action="" id="form-login" method="POST">
            <input type="text" name="email" id="email" placeholder="Email">
            <?php echo form_error('email'); ?>
            <input type="submit" id="btn_login" name="btn_req" value="Gửi yêu cầu">
            
        </form>
        <a href="?mod=users&action=login" id="lost-pass">Đăng nhập</a> |
        <a href="?mod=users&controller=index&action=reg" id="lost-pass">Đăng ký</a>

    </div>
</body>

</html>