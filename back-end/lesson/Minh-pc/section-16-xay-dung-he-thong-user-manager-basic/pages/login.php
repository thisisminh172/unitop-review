<?php
if(isset($_POST['btn_login'])){
    $error = array();
    #Kiểm tra username
    if(empty($_POST['username'])){
        $error['username'] = "Không được để trống username";
    } else{
        $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
        if(!preg_match($pattern,$_POST['username'])){
            $error['username'] = "Tên đăng nhập không hợp lệ";
        }else{
            $username = $_POST['username'];
        }
    }
    if(empty($_POST['password'])){
        $error['password'] = "Không được để trống password";
    } else{
        $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
        if(!preg_match($pattern,$_POST['password'])){
            $error['password'] = "Mật khẩu không đúng định dạng";
        }else{
            $password = $_POST['password'];
        }
    }
    if(isset($_POST['ck_remember'])){
        setcookie('username',$username,time()+3600);
        setcookie('password',$password,time()+3600);
    }

    #Kết luận
    if(empty($error)){
        //Xữ lý login
        if(check_login($username,$password)){
            //Lưu trữ phiên đăng nhập
            $_SESSION['is_login'] = true;
            $_SESSION['user_login']=$username;
            //Chuyển hướng vào trong hệ thống
            redirect("?page=home");
        }else{
            $error['account']="Tài khoản đăng nhập không chính xác";
        }
    }
}
?>

<html>

<head>
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1 class="page-title">ĐĂNG NHẬP</h1>
        <form action="" id="form-login" method="POST">
            <input type="text" name="username" id="username" placeholder="username" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username']; } ?>">
            <?php if(!empty($error['username'])){?> <p class="error"> <?php echo $error['username'];  ?></p>  <?php } ?>
            <input type="password" name="password" id="password" placeholder="password"  value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; } ?>">
            <?php if(!empty($error['password'])){?> <p class="error"> <?php echo $error['password'];  ?></p>  <?php } ?>
            <input type="checkbox" name="ck_remember" id="ck_remember" checked>
            <label for="ck_remember" class="text-grey" >Remember me</label>
            <input type="submit" id="btn_login" name="btn_login" value="Đăng nhập">
            <?php if(!empty($error['account'])){?> <p class="error"> <?php echo $error['account'];  ?></p>  <?php } ?>

        </form>

        <a href="" id="lost-pass">Quên mật khẩu</a>

    </div>
</body>

</html>
