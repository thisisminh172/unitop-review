<?php
$list_check=array();
if(isset($_POST['btn_add'])){
    // echo "<pre>";
    // print_r ($_POST);
    // echo "</pre>";
# Cách xử lý 1
    if(!empty($_POST['cat'])){
        foreach($_POST['cat'] as $item){
            echo $item."<br>";
        }
# Cách xử lý 2

        $list_check = implode(',', $_POST['cat']);
        echo $list_check;

    }
    
}

?>

<html>
    <head>
        <title>Lấy dữ liệu từ list check box</title>
    </head>
    <body>
        <h1>Chọn danh mục</h1>
        <form action="" method="POST">
        <input type="checkbox" name="cat[]" id="sport" value="1">
        <label for="sport">Thể thao</label><br><br>
        <input type="checkbox" name="cat[]" id="social" value="2">
        <label for="social">Xã hội</label><br><br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
        </form>
    </body>
</html>