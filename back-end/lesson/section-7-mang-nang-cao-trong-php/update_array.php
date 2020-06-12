<?php
//thay đổi phần tử mảng
$list_user = array(
    'id'=>1,
    'fullname'=>'Lê Linh',
    'email'=>'minh@gmail.com'
);
echo "<pre>";
print_r ($list_user);
echo "</pre>";
//cập nhật tại thông tin mảng
$list_user['fullname']= 'Lê Minh';
//xuất lại mảng
echo "<pre>";
print_r ($list_user);
echo "</pre>";

?>