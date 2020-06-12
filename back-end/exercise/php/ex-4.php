<?php
# 1.tạo biến lưu trữ ds thành viên
$list_member = array(
    1 => array(
        'name' => 'Minh',
        'age' => 27,
        'gender' => true,
    ),
    2 => array(
        'name' => 'Nga',
        'age' => 27,
        'gender' => false,
    ),
);
# 2.tạo biến lưu trữ ds sản  phẩm
$list_product = array(
    1 => array(
        'id' => 1,
        'product' => 'Iphone',
        'price' => 2000,
    ),
    2 => array(
        'id' => 2,
        'product' => 'SamSung',
        'price' => 1000,
    ),
);
// echo "<pre>";
// print_r ($list_product);
// echo "</pre>";
# 3.hiển thị thog6 tin cá nhân lưu ở dạng biến
$name = 'Minh';
$birthYear = 1993;
$weight = 62.5;

echo "Tôi là <strong>{$name}</strong>, sinh năm <strong>{$birthYear}</strong>, cân nặng <strong>{$weight}kg</strong>"

?>