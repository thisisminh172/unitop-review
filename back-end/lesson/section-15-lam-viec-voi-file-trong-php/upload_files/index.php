
<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);
//Thư mục chứa file upload
    $upload_dir = 'uploads/';
// đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "upload file thành công";
        echo "<a href ='$upload_file'>Download: {$_FILES['file']['name']}</a>";
    } else {
        echo " file upload không thành công";
    }

}

?>
<html>

<head>
    <title>Upload files lên server với php</title>
</head>

<body>
    <h1>Upload files</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        Send this file: <input type="file" name="file" id=""><br><br>
        <input type="submit" name="btn_upload" value="Upload file">
    </form>
</body>

</html>