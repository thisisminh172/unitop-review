
<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);
    $error = array();
    //Thư mục chứa file upload
    $upload_dir = 'uploads/';
    // đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];

    #Xử lý upload đúng file ảnh
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    // lấy đuôi file
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    echo $type . "<br>";

    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "Chỉ được upload file có đuôi jpg,png,gif,jpeg";
    } else {
        #upload file có kích thước cho phép(<20MB ~ 20971520 byte)
        $file_size = $_FILES['file']['size'];
        if ($file_size > 20971520) {
            $error['file_size'] = "Chỉ được upload file bé hơn 20MB";
        }

        #Kiểm tra trùng tên file trên hệ thống
        if (file_exists($upload_file)) {
            //$error['file_exist'] = "file đã tồn tại trên hệ thống";
            //======================================
            //xử lý đổi tên file tự động
            //======================================
            #Tên file mới
            //Tên file.đuôi file
            $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
            $new_file_name = $file_name . ' - Copy.';
            $new_upload_file = $upload_dir . $new_file_name . $type;
            $k = 1;
            while (file_exists($new_upload_file)) {
                $new_file_name = $file_name . " - Copy({$k}).";
                $k++;
                $new_upload_file = $upload_dir . $new_file_name . $type;
            }

            $upload_file = $new_upload_file;

        }

    }

    #Chuyển file lên server
    #Kết luận
    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<img src='{$upload_file}'/><br>";
            echo "<a href ='$upload_file'>Download: {$_FILES['file']['name']}</a>";
        } else {
            echo " file upload không thành công";
        }

    } else {
        show_array($error);
    }

}

?>
<html>

<head>
    <title>Upload files ảnh lên server với php</title>
</head>

<body>
    <h1>Upload files</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        <input type="file" name="file" id=""><br><br>
        <input type="submit" name="btn_upload" value="Upload file">
    </form>
</body>

</html>