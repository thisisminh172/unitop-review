<?php
$a = 10;

if (($a >= 0) and ($a % 2 == 0)) {
    $a++;
    echo "your number is: {$a}";
} else {
    echo "it's not even number";
}
?>