<?php
#thêm phần tử có key xác định
$list_user = array(
    'id'=>1,
    'fullname'=>'Lê Minh',
    'email'=>'minh@gmail.com'
);
//Lưu trữ thêm số điện thoại
//số điện thoại => tel, phone
$list_user['phone']='0987654321';

#thêm mảng có key mặc định
$list_prime = array(2,3,5,7);
$list_prime[]=11;
//===========
//output
//===========
echo "<pre>";
print_r ($list_prime);
echo "</pre>";
?>