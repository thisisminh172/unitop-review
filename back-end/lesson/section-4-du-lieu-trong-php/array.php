<?php
//================
//ARRAY
//================
# Mảng 1 chiều
$list_course = array('html css','Jquery','php MySQL');
//print_r ($list_course);
$list_even = array(0,2,4,6,8,10);
# Mảng nhiều chiều
//Mảng ds thành viên
/*
 *id
 *ten
 *tuoi
*/
$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Văn Cương',
        'age'=>30
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Lê Minh',
        'age'=>27
    )
    );
print_r ($list_user);
?>