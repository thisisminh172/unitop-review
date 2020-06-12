<?php
require 'db/connect.php';

if (isset($_POST['btn_cmt'])) {

    $username = $_POST['username']; // cần chuẩn hóa
    $content = htmlentities($_POST['comment']);
    
    if (!empty($username) && !empty($content)) {
        $sql = "INSERT INTO `tbl_comment` (`username`,`content`) VALUES ('{$username}','{$content}')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo mysqli_error($conn);
        } else {
            echo "comment thành công";
        }
    }
}

$sql = "SELECT * FROM `tbl_comment`";
$result = mysqli_query($conn, $sql);
$list_comment = array();
// echo "<pre>";
// print_r (mysqli_fetch_assoc($result));
// echo "</pre>";
while ($row = mysqli_fetch_assoc($result)) {
    $list_comment[] = $row;
}

?>

<html>

<head>
    <title>XSS</title>

</head>

<body>
    <style>
    label,
    input,
    textarea {
        display: block;
    }
    </style>
    <h1>Bình luận</h1>
    <form action="" method="POST">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <label for="comment">Nội dung bình luận</label>
        <textarea name="comment" id="comment" cols="50" rows="10"></textarea>
        <input type="submit" value="Bình luận" name="btn_cmt">
    </form>

    <?php
    foreach ($list_comment as &$item) {?>
    <p><b><?php echo $item['username'] ?>: </b><?php echo $item['content'] ?></p>
    <?php
}

?>
</body>

</html>