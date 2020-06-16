<?php
#tạo mảng rỗng
$error             = array();
$error['username'] = 'Bạn không được để trống tên đăng nhập';
#tạo mảng với key mặc định
$list_odd = array(1, 3, 5);
#Tạo mảng với key xác định
//User list: id, họ tên, email
$list_user = array(
    'id'       => 1,
    'fullname' => 'Lê Minh',
    'email'    => 'minh@gmail.com'
);

//===========
//output
//===========
echo "<pre>";
print_r($error);
echo "</pre>";
