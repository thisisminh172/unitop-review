<?php
#1. xây dựng hàm kiểm tra số nguyên chẵn
function check_even($n){
    if($n%2==0){
        echo "{$n} là số chẵn";
        return true;
    } else{
        echo "{$n} là số lẻ";
        return false;
    }
}
#2. tính tổng các số nguyên tó
# Hàm keim63 tra số nguyên tố
function check_prime($num){
    if($num==1){
        return 0;
        //echo "true";
    }
    for ($i=2;$i<=sqrt($num);$i++){
        if($num%$i==0){
            return 0;
        }
    }
    return 1;
}
# Hàm tình tổng số nguyên tố
function total_prime($value){
    $total = 0;
    for($i=2;$i<=$value;$i++){
        if(check_prime($i)==1){
            $total+=$i;
        }
    }
    echo $total;
}
//check_even(9);
$total = total_prime(10);
//echo $total;
?>