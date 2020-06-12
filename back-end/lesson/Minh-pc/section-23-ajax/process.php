<?php
//Tính toán
$num_order = $_POST['num_order'];
$price = $_POST['price'];
$total = $num_order * $price;

// $result = array(
//     'price'=>$price,
//     'num_order'=>$num_order,
//     'total'=>$total
// );


//Khi trả về theo dạng json thì phải cho vào dạng mảng
//Xuất thì echo
echo $total;
// echo json_encode($result);// số, chuỗi, html, json,...

?>