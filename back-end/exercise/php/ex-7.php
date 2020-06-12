<?php
$odd_num = array();
$index = 0;
for ($i = 3; $i <= 150; $i += 2) {
    $odd_num[] = $i;
}
foreach ($odd_num as $item) {
    echo $item . "<br>";
}
echo "<pre>";
print_r($odd_num);
echo "</pre>";