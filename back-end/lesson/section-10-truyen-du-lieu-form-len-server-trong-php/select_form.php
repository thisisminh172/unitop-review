<?php
if(isset($_POST['btn_order'])){
    if(empty($_POST['pay'])){
        echo "vui lòng chọn hình thức thanh toán";
    } else{
        $pay = $_POST['pay'];
        echo $pay;
    }

}


?>

<html>
    <head>
        <title>Lấy dữ liệu từ list check box</title>
    </head>
    <body>
        <h1>Chọn hình thức thanh toán</h1>
        <form action="" method="POST">
            <select name="pay" id="">
            <option value="">---Chọn thanh toán---</option>
            <option value="cod">Thanh toán tại nhà</option>
            <option value="banking">Thẻ ngân hàng</option>
        </select><br><br><br> 
        <input type="submit" name="btn_order" value="Đặt hàng">

        </form>
        
    </body>
</html>