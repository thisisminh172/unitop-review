<?php
//========================
//Khai báo 3 biến
//========================
$fullName = "Le Minh";
$userName = "phan cuong";
$mail = "leminh@gmail.com"
?>
<html>
    <head>
        <title>Bài tập số 3</title>
    </head>

    <body>
    <style>
        .text-bold{
            font-weight:bold;
        }
    </style>
        <h1>Thông tin cá nhân</h1>
        <p>Họ và tên: <span class="text-bold"><?php echo $fullName;?></span></p>
        <p>Username: <span class="text-bold"><?php echo $userName;?></span></p>
        <p>Email: <span class="text-bold"><?php echo $mail;?></span></p>
    </body>
</html>