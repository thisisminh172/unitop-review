<?php
//tính tổng các số chẵn từ 0 - 10
$t =0;
for($n = 0;$n<=10;$n++){
    if($n%2==0){
        $t+=$n;
    }
}
echo "tổng số chẵn từ 0-10: {$t}";
?>