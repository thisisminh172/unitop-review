<?php
    // $x = 1;
    // $y = 3;
    // // if ($x>5 and $y<6){
    // //     echo"OK";
    // // }
    // // if ($x>5 && $y<6){
    // //     echo"OK";
    // // }
    // if (!($x>5)){
    //     //phủ định có nghĩa là $x <= 5
    //     echo"OK";
    // }

    function check_even($x){
        if($x % 2 ==0){
            return true;
        }return false;
    }
    if(!check_even(6)){
        echo "Day la so lẻ";
    }else echo "day la so chan";
?>