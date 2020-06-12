<?php
require 'lib/data.php';
show_array($_FILES);

//Thư mục chứa file upload
$upload_dir='uploads/';
// đường dẫn của file sau khi upload
$upload_file= $upload_dir.$_FILES['file']['name'];
if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_file)){
    echo "upload file thành công";
    echo "<a href ='$upload_file'>Download: {$_FILES['file']['name']}</a>";
}else{
    echo " file upload không thành công";
}