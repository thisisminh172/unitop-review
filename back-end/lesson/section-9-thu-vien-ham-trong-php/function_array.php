<?php
#array_key_exists
// $search_array = array('first' => 1, 'second' => 4);
// if (array_key_exists('a', $search_array)) {
//     echo "The 'a' element is in the array";
// } else{echo "no";}

#array_merge

$array_1 = array(1,2);
$array_2 = array(4,6);
$result = array_merge($array_1,$array_2);
//print_r ($result);
#count đếm số lượng phận tử của mảng
$list_num = array(1,3432,325,3454,3543,5435,43543,145,156436,2365,436543,35634);
//echo count($list_num);

#in_array
$my_array = array(1,4,6,3);
if(in_array(3,$my_array)){
    echo "có nha";
}
?>