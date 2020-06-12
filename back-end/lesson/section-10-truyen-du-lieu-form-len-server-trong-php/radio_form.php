<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
//convert giá trị show gender
$show_gender = array(
    'male'=>'Nam',
    'female'=>'Nữ'
);


//============
if(isset($_POST['btn_reg'])){
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    } else{
        //xuất lỗi
        echo "Vui lòng chọn giới tính";

    }
}

?>

<html>
    <head>
        <title>Lấy dữ liệu radio box</title>
    </head>
    <body>
        <h1>Đăng ký</h1>
        <form action="" method="POST">
        <input type="radio" name="gender" id="male" checked="checked" value="male">
        <label for="male">Nam</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Nu</label><br>

        <input type="submit" value="register" name="btn_reg">
        </form>
    </body>
</html>