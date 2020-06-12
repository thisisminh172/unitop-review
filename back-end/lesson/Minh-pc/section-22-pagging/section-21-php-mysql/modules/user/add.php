<?php
get_header('product');
?>
<?php
if(isset($_POST['btn_login'])){
    $error = array();
    $alert = array();
    //fullname
    if(empty($_POST['fullname'])){
        $error['fullname']="Họ tên không được để trống";
    }else{
        $fullname = $_POST['fullname'];
    }

    //username
    if(empty($_POST['username'])){
        $error['username']="Tên đăng nhập không được để trống";
    }else{
        if(is_username($_POST['username'])){
            $username = $_POST['username'];
        }else{
            $error['username']="Tên đăng nhập không đúng định dạng";
        }
    }

    //password
    if(empty($_POST['password'])){
        $error['password']="Mật khẩu không được để trống";
    }else{
        if(is_password($_POST['password'])){
            $password = md5($_POST['password']);
        }else{
            $error['password']="Mật khẩu không đúng định dạng";
        }
    }

    //email
    if(empty($_POST['email'])){
        $error['email']="Email không được để trống";
    }else{
        if(is_email($_POST['email'])){
            $email = $_POST['email'];
        }else{
            $error['email']="email không đúng định dạng";
        }
    }

    //giới tính
    if(empty($_POST['gender'])){
        $error['gender']="Xin chọn giới tính";
    }else {
        $gender = $_POST['gender'];
    }



//kết luận
    if (empty($error)) {
    //xử lý không có  lỗi
    $sql = "INSERT INTO `tbl_users` (`fullname`,`email`,`password`,`username`,`gender`)" . "VALUES('{$fullname}','{$email}','{$password}','{$username}','{$gender}')";
    if(mysqli_query($conn,$sql)){
        $alert['success'] ="Thêm dữ liệu thành công";
    }else{
        echo "Lỗi:" . mysqli_error($conn);
    }
    }


}
?>

<div id="content">
    <h1>Thêm mới</h1>
    <form action="" method="POST">
    <?php 
    
    if(!empty($alert['success'])){?>
    <p class="success"><?php echo $alert['success'];?></p>
        
        <?php
    }
    
    ?>
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname">
        <?php echo form_error('fullname'); ?>
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <?php echo form_error('username'); ?>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <?php echo form_error('email'); ?>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <?php echo form_error('password'); ?>
        <select name="gender" id="gender">
            <option value="">--Chọn giới tính--</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <?php echo form_error('gender'); ?>
        <br><br><br>
        <input type="submit" value="Login" name="btn_login">
    </form>
</div>

<?php
get_footer();
?>