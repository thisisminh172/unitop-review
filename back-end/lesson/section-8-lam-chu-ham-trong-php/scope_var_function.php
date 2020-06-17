<?php
# Biến toàn cục
$a=10;
$b=500;
function sum(){
    global $a,$b;
    return $a+$b;
}
// function sum(){
//     return $GLOBALS['a'] + $GLOBALS['b'];
// }
echo sum();
?>