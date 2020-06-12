<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/reset.css">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/responsive.css">
    <title>Admin</title>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <h1 id="logo" class="text-white">Admin</h1>
            <div id="account">
                <p class="text-white">Hello <strong>Admin</strong>(<a href="">logout</a>)</p>
            </div>
            <div class="clearfix"></div>
        </div>

        <div id="content">
            <div id="sidebar" class="text-white">
                <div id="nav">
                    <ul>
                        <li class="dropdown">
                            <a href="">Post</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a href="">New post</a></li>
                                    <li><a href="">List post</a></li>
                                    <li><a href="">Post category</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="">Product</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a href="">New product</a></li>
                                    <li><a href="">List product</a></li>
                                    <li><a href="">Category</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="">Sales</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a href="">List sale</a></li>
                                    <li><a href="">List customer</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="">Slider</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a href="">New slider</a></li>
                                    <li><a href="">List slider</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="">User</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a href="?page=update_user">Update user info</a></li>
                                    <li><a href="?page=update_pass">Change password</a></li>
                                    <li><a href="?page=register">Register</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>