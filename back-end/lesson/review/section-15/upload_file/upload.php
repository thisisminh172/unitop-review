<?php

require 'lib/data.php';

show_array($_FILES);

//thư mục chứa file upload
$upload_dir = 'uploads/';
$upload_file = $upload_dir.$_FILES['file']['name'];
if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_file)){
    echo "upload file thành công";
}else{
    echo "upload file thất bại";
}
?>

<html>
    <a href="index.php">back</a>
</html>