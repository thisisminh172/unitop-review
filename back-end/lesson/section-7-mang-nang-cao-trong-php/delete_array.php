<?php
#Xóa phần tử trong mảng 1 chiều
$list_users = array(
    'id' => 1,
    'fullname' => 'Lê Linh',
    'email' => 'minh@gmail.com',
    'website' => 'unitop.vn',
);
echo "<pre>";
print_r($list_users);
echo "</pre>";
unset($list_users['website']);
echo "<pre>";
print_r($list_users);
echo "</pre>";
echo "<br>------------------------<br>";
echo "<br>------------------------<br>";
echo "<br>------------------------<br>";
echo "<br>------------------------<br>";
#Xóa phần tử trong mảng đa chiều
$info = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Lê Linh',
        'email' => 'minh@gmail.com',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Quỳnh Nga',
        'email' => 'nga@gmail.com',
        'website' => 'unitop.vn',
    ),
);
echo "<pre>";
print_r($info);
echo "</pre>";
echo "<br>------------------------<br>";

//xóa thông tin của quỳnh nga
unset($info[2]['website']);
echo "<pre>";
print_r($info);
echo "</pre>";