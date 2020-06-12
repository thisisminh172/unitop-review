<?php
    // $str_1 = "xin chào";
    // $str_2 = "<strong>admin</strong>";
    // echo "str_1 = {$str_1}"."<br>";
    // echo "str_2 = {$str_2}"."<br>";
    // echo "<br>------------------------<br>";
    // $notifi = $str_1." ".$str_2;
    // echo $notifi;
    //========================
    $notifi = "xin chào ";
    $userName = "<strong>admin</strong>";
    echo "notifi: {$notifi}<br>";
    echo "userName: {$userName}<br>";
    echo "<br>------------------------<br>";
    $notifi .= $userName;
    echo $notifi;
?>