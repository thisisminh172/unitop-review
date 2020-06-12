<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/import/login.css">
    <title>login</title>
</head>

<body>
    <form action="" method="POST" id="login-form">
        <h1 class="text-white" id="login-title">LOGIN</h1>
        <input type="text" id="username" name="username" class="username" placeholder="Username" require>
        <input type="password" id="password" name="password" class="password" placeholder="Password" require><br>
        <input type="checkbox" name="remember_me" id="rememeber-me"> Remember me 
        <input type="submit" value="LOGIN" name="btn_login" id="btn-login">
        <a href="">Sign up</a> | <a href="">Forget password?</a>
    </form>
</body>

</html>