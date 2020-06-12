<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if(isset($_POST['btn_login'])){
    //$username=$_POST['username'];
    if (empty($_POST['username'])) {
    echo "Không được để trống tên đang nhập";
} else {
    $username = $_POST['username'];
    echo $username;
}

    if(empty($_POST['password'])){
        echo"Không được để trống mật khẩu";
    } else{
        $password = $_POST['password'];
        echo $password;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu từ textbox</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
        Username: <input type="text" name='username'><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login" name="btn_login">
        </form>
    </body>
</html>