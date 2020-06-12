<?php
//======================
//if statement
//======================
//$a = 101;
// if($a%2==0){
//     echo "{$a} is even number";
// }
#if elseif else...
// $point = 7;
// if($point < 4){
//     echo "f";  
// }
// elseif($point <5.5){
//     echo "d";
// }
// elseif($point<7){
//     echo "c";
// }
// elseif($point<8.5){
//     echo "b";
// }
// else {
//     echo "a";
// }
#if else lồng nhau
$point = 10;
if($point >= 0 && $point<=10){
    if($point < 4){
    echo "f";  
    }
    elseif($point <5.5){
    echo "d";
    }
    elseif($point<7){
    echo "c";
    }
    elseif($point<8.5){
    echo "b";
    }
    else {
    echo "a";
    }
}else{
    echo "du lieu khong hop le";
}
?>