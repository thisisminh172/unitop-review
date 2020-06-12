<?php
$list_users = array(
    1=>array(
        'id'=>1,
        'fullname'=>'Lê Linh',
        'email'=>'minh@gmail.com'
    ),
    2=>array(
        'id'=>2,
        'fullname'=>'Quỳnh Nga',
        'email'=>'nga@gmail.com'
    )
);
echo "<pre>";
print_r ($list_users);
echo "</pre>";
echo "sau khi thay doi";
echo "<br>------------------------<br>";



/*
 * thêm phần tử
 * id 3
 */

$list_users[3] = array(
    'id'=>3,
    'fullname'=>'Lê trung',
    'email'=>'trung@gmail.com'
);

echo "<pre>";
print_r ($list_users);
echo "</pre>";
echo "sau khi thay doi";
echo "<br>------------------------<br>";

#lấy phần tử của mảng đa chiều
$info = $list_users[3];
echo "<pre>";
print_r ($info);
echo "</pre>";
echo $info['fullname'];
echo "<br>------------------------<br>";
echo $list_users[3]['id'];
?>