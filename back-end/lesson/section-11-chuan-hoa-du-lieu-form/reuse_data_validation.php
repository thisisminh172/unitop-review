<?php
require 'lib/validation.php';
if(isset($_POST['btn_reg'])){
    $error=array();
    if(empty($_POST['gender'])){
        $error['gender'] = "Bạn cần chọn giới tính";
    }else{
        $gender = $_POST['gender'];
        echo $gender;
    }
    if(empty($_POST['fullname'])){
        $error['fullname'] = "Nhập họ tên";
    }else{
        $fullname = $_POST['fullname'];
        echo $fullname;
    }
    
}
?>
<html>
    <head>
        <title>Chuẩn hóa dữ liệu form đăng nhập</title>
    </head>
    <body>
        <style>
            .error{
                color:red;
            }
        </style>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>">
        <?php echo form_error('fullname') ?>
        
        <br>
        <label for="">Giới tính</label>
        <select name="gender" id="">
            <option value="">---Chọn---</option>
            <option <?php if(!empty($_POST['gender']) && $gender == 'male') echo "selected='selected'" ?> value="male">Nam</option>
            <option <?php if (!empty($_POST['gender']) && $gender == 'female') echo "selected='selected'"; ?>value="female">Nữ</option>
        </select>
        <?php echo form_error('gender') ?>

        <br>
        <input type="submit" value="Register" name="btn_reg">
        </form>
    </body>
</html>