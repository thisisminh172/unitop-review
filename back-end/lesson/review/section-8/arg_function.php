<?php
#ham co 1 tham so
function check_even($n)
{
	if ($n % 2 == 0) {
		echo "{$n} la so so chan";
	}
}

#ham co 2 tham so
function sum($a, $b)
{
	echo $a + $b;
}

function show_array($data)
{
	if (is_array($data)) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

}

#ham nhieu tham so
// function sum_multi_number()
// {
// 	// echo func_num_args()."<br>";
//     $t = 0;
// 	$list_args = func_get_args();
// 	foreach ($list_args as $value) {
// 		$t += $value;
// 	}
//     echo $t;
// }

//sum_multi_number(4, 5, 5, 6, 7, 3, 43, 343, 7);
$list_number = array(2, 4, 6);
function sum_multi_number($list_number = array())
{
	if (is_array($list_number)) {
		$t = 0;
		foreach ($list_number as $value) {
			$t += $value;
		}
		echo $t;
	}
}

sum_multi_number($list_number);

function myFunction($arg_1, $arg_2, $option = array())
{
	$a = func_get_arg(0);
	$b = func_get_arg(1);
}

// input type = 'text' name = '' value='' id = '' class =''
function create_input_text($name,$value,$option = array())
{
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if(!empty($option)){
        $id = $option['id'];
        $class = $option['class'];
    }

    $input_html = "<input type='text' name='{$name}' value = '{$value}' id='{$id}' class='{$class}'>";
    echo $input_html;
}
create_input_text('username','',$option = array('id'=>'username','class'=>'form-input'));

