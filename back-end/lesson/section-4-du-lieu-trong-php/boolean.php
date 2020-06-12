<?php
$a = 10;


function checkEven($n){
    if ($n % 2 == 0){
        //true or false
        return true;
    }return false;
}
$check = checkEven($a);
echo $check;
?>