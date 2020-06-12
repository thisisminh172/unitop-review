<html>
    <head>
        <title>Hệ thống điều hướng cơ bản</title>
        <base href="http://localhost/unitop.vn/back-end/lesson/Minh-pc/section-28/project_mvc/">
        <link rel="stylesheet" href="public/css/reset.css">
        <link rel="stylesheet" href="public/css/style.css">
        <script src="public/js/jquery-3.4.1.min.js"></script>
        <script src="public/js/app.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <?php 
                if(is_login()){
                ?>
                <div id="user-login">
                    <p>Xin chào <b><?php echo $_SESSION['user_login']; ?></b>(<a href="?mod=users&action=logout">Thoát</a>)</p>
                </div>
                <?php
                }
                ?>
                <ul id="main_menu">
                    <li><a href="?">Trang chủ</a></li>
                    <li><a href="gioi-thieu-1.html">Giới thiệu</a></li>
                    <li><a href="?mod=order&action=update">Đơn hàng</a></li>
                    <li><a href="?page=product">Sản phẩm</a></li>
                    <li><a href="?page=contact">Liên hệ</a></li>
                    <li><a href="?mod=users&controller=index&action=login">Đăng nhập</a></li>
                    <li><a href="?mod=users&controller=index">Thành viên</a></li>

                </ul>
            </div>
            <!-- end header -->