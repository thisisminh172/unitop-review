<?php
#Mảng dữ liệu user
/**
 * Thông tin user
 * Họ và tên => fullname
 * tên đăng nhập => username
 * mật khẩu=> password
 * email
 * id
 */
$list_users = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Le Minh',
        'username' => 'minhle',
        'password' => md5('minhle!@#'),
        'email' => 'minhle@gmail.com',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Hoang Tu',
        'username' => 'hoangtu',
        'password' => md5('hoangtu123'),
        'email' => 'hoangtu@gmail.com',
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Nga Do',
        'username' => 'ngado',
        'password' => md5('ngado!@#'),
        'email' => 'ngado@gmail.com',
    ),
);
