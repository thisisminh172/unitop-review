<?php
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r ($data);
        echo "</pre>";
    }
}
//show_array($_SERVER);
//Kiểm tra submit form
if($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['username'];
$password = $_POST['password'];
echo $username . "-" . $password;

}


?>
<html>
    <head>
        <title>Truyền dữ liệu form bằng phương thức POST</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
        Name: <input type="text" name='username'><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login" name="btn_login">
        </form>
    </body>
</html>
