<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_POST['btn_login'])) {
    //$username=$_POST['username'];
    $info_user = array(
        'username'=>'admin',
        'password'=>'admin!@#'
    );
    $error= array();
    if (empty($_POST['username'])) {
    $error['username']= "Không được để trống tên đang nhập";
} else {
    $username = $_POST['username'];
}

if (empty($_POST['password'])) {
    $error['password']= "Không được để trống mật khẩu";
} else {
    $password = $_POST['password'];
}

    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo "{$username} - {$password}";
    /**
     * B1:Kiểm tra dữ liệu
     * B2: Gán dữ liệu
     * B3: Liểm tra login
     * B4: xử lý login
     * --chuyến hướng qua carrt.php
     * --thông báo: Lỗi đăng nhập
     */
    if(empty($error)){//dữ liệu đã nhập
        if($username==$info_user['username']&&$password==$info_user['password']){
            $redirect_to = $_POST['redirect_to'];
            echo $redirect_to;
            header("location:{$redirect_to}");
        }else{
            $error['login']="Tên đăng nhập hoặc mật khẩu không chính xác";
        }
    }
    if(!empty($error)){
        show_array($error);
    }
    
}
?>
<html>
    <head>
        <title>Lấy dữ liệu từ hidden field</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
        Username: <input type="text" name='username'><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" value="Login" name="btn_login">
        </form>
    </body>
</html>
