<?php
if(isset($_POST['btn_add'])){
    if(empty($_POST['post_detail'])){
        echo "vui lòng nhập thông tin";
    } else{
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu từ textarea</title>
    </head>
    <body>
        <h1>thêm bài viết</h1>
        <form action="" method="POST">
          <label for="">chi tiết</label><br><br>
          <textarea name="post_detail" id="" cols="30" rows="10"></textarea><br><br>
          <input type="submit" name="btn_add" value="Thêm bài viết">
        </form>
        
    </body>
</html>