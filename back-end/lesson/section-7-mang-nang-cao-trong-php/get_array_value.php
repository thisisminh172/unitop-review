<?php
$list_user = array(
    'id'=>1,
    'fullname'=>'Lê Minh',
    'email'=>'minh@gmail.com'
);
$id = $list_user['id'];
//lấy dữ liệu từ array
//lấy fullname

?>
<html>
<head>
    <title>lấy dữ liệu</title>
</head>
<body>
    <p>Họ và tên: <strong><?php echo $list_user['fullname'];?></strong></p>
    <p>id: <strong><?php echo $id;?></strong></p>
    <p>email: <strong><?php echo $list_user['email'];?></strong></p>

</body>
</html>