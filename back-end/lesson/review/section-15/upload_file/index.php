<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file len server voi php</title>
</head>

<body>
    <h1>Upload file</h1>
    <hr>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <input type="file" name="file"><br><br>
        <input type="submit" value="Upload file">
    </form>
</body>

</html>