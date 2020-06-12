<?php
#hàm có 1 tham số
function check_even($n){
    if($n%2==0){
        echo "{$n} là số chẵn";
    } else{
        echo "{$n} là số lẻ";
    }
}
//check_even(7);
//================================
#Hàm có nhiều tham số
function sum($a, $b)
{
    $t = $a + $b;
    echo $t;
}

# Hàm có tham số tùy biến
// function sum_multi_number(){

//     //đếm có bao nhiêu tham số
//     echo func_num_args()."<br>";
//     //lấy tham số
//     //0 1 2 3
//     $list_args = func_get_args();
//     $t = 0;
//     foreach($list_args as $value){
//         $t += $value;
//     }
//     echo "<pre>";
//     print_r ($list_args);
//     echo "</pre>";

//     $a=func_get_arg(0);
//     $b=func_get_arg(1);
//     echo "a = {$a}, b = {$b}<br>";
//     echo $t;
// }
//sum_multi_number(2,5,4,6);


# Hàm có tham số tùy biến
$list_number = array(2,4,6);
function sum_multi_number($list_number = array()){
    if(is_array($list_number)){
        $t = 0;
        foreach($list_number as $value){
            $t += $value;
        }
        echo $t;
    }
}
//sum_multi_number($list_number);
function myFunction($arg_1,$arg_2,$option = array()){
    $a = func_get_arg(0);
    $b = func_get_arg(1);
}

//<input type='text' name value id class/>
function create_input_text($name,$value,$option = array()){
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if(!empty($option)){
        $id = $option['id'];
        $class = $option['class'];
    }

    $input_html = "<input type='text' name='{$name}' value='{$value}' id='{$id}' class = '{$class}'/>";
    echo $input_html;
}
create_input_text('username','',$option=array('id'=>'username','class'=>'form_input'));
?>