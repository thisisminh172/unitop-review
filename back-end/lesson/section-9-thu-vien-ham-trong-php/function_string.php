<?php
#1. strlen
$my_str = "   this   is   Minh Le    ";
//echo strlen($my_str);
#2. ucfirst
//echo ucfirst($my_str);
//echo ucwords($my_str);
#3. 
//do echo được tối ưu nên không hiện
//echo $my_str."<br>";
//echo trim($my_str);
#4. str_repeat
//echo str_repeat('--',2);
#5. md5
//echo md5('unitop.vn');
#6. join 
$my_id = array(1,2,5);
//echo join('<br>',$my_id);
#7. implode
//echo implode('<br>',$my_id);
#8. explode
$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
//print_r($pieces);
//echo $pieces[3];
#9. htmlspecialchars
$js = "<script> alert('ok');</script>";

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

?>