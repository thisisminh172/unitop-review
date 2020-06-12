<?php
#duyệt mảng 1 chiều
// $list_prime = array(2,3,5,7);
// $t =0;
// foreach($list_prime as $key=>$value){
//     echo $key."=>".$value;
//     echo "<br>";
//     $t+=$value;
// }
// echo "tổng: ";
// echo $t;

#Duyệt mảng đa chiều
$list_users = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Lê Linh',
        'email' => 'minh@gmail.com',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Quỳnh Nga',
        'email' => 'nga@gmail.com',
    ),
);
echo "<pre>";
print_r($list_users);
echo "</pre>";
foreach ($list_users as $item) {
    // echo "<pre>";
    // print_r ($item);
    // echo "</pre>";
    echo $item['id'] . "<br>";
    echo $item['fullname'] . "<br>";
    echo $item['email'] . "<br>";
    echo "---------<br>";

}