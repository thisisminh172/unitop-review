<?php
// xóa file ảnh
$file_url = "uploads/cau7.PNG";
if(@unlink($file_url)){
    echo "Xóa file {$file_url} thành công";
}else {
    echo "File {$file_url} không tồn tại trên hệ thống";
}

#cách 2 - not recommended
// $file_url = "cau7.PNG";
// if (@unlink('uploads/'.$file_url)) {
//     echo "Xóa file {$file_url} thành công";
// } else {
//     echo "File {$file_url} không tồn tại trên hệ thống";
// }

