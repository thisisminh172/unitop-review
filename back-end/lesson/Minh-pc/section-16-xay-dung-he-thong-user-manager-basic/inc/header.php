<html>
    <head>
        <title>User manager basic</title>
        <link rel="stylesheet" href="public/css/reset.css">
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <a href="" id="logo">MINHLE</a>
                <div id="user_login">
                    <p>Xin chào <strong><?php if (is_login()) {echo info_user('fullname');}?></strong>(<a href="?page=logout">Thoát</a>)</p>
                </div>
                <ul id="main_menu">
                    <li><a href="?page=home">Trang chủ</a></li>
                    <li><a href="?page=about">Giới thiệu</a></li>
                    <li><a href="?page=post">Tin tức</a></li>
                    <li><a href="?page=product">Sản phẩm</a></li>
                    <li><a href="?page=contact">Liên hệ</a></li>
                    <li><a href="?page=login">Đăng nhập</a></li>

                </ul>
            </div>
            <!-- end header -->