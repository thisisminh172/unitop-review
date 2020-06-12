<?php
#1. tính tổng các số chẵn từ 1 - n(n>=2)
$n = 10;
$t = 0;
// for($i = 0;$i<=$n;$i++){
//     if($i%2==0){
//         $t+=$i;
//     }
// }
// echo "câu 1: {$t}";
#2. tính tổng các số nghịch đảo các số chia hết cho 3 từ 3 đến n(n>=3)
// for($i = 3;$i<=$n;$i++){
//     if($i%3==0){
//         $t += (1/$i);
//     }
// }
// echo "câu 2: {$t}";
#3. tính tổng chuổi
// for($i=0;$i<=$n;$i++){
//     $t += ($i/($i+1));
// }
// echo "câu 3: {$t}";
#4. giải phương trình bậc 2: ax^2 +bx + c = 0
$a = 1;
$b = 1;
$c = -2;
if ($a != 0){
    //giải
    $delta = $b*$b - 4*$a*$c;
    if($delta <0){
        echo "phuong trinh vo nghiem";
    }elseif($delta == 0){
        $x = -$b/2*$a;
        echo "phuong trinh co nghiem kep x = {$x}";

    }else {
        $x1 = (-$b + sqrt($delta))/2*$a;
        $x2 = (-$b - sqrt($delta))/2*$a;

        echo "phuong trinh co 2 nghiem: x1 = {$x1}, x2 = {$x2}";
    }

} else{
    echo "day khong phai phuong trinh bac 2";
}

?>