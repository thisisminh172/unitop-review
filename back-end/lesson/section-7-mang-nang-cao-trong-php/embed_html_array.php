<?php
$list_prime = array(2, 3, 5, 7);
/*
 * B1: Chuẩn bị mảng đã xử lý
 * B2: Tạo cấu trúc html mẫu
 * B3: duyệt mảng
 * B4: đỗ dữ liệu
 */
?>
<html>

<head>Xuất dữ liệu lên html</head>

<body>
    <h1>Danh sách số nguyên tố</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">stt</td>
                <td align="center" width="200">Số nguyên tố</td>
            </tr>
        </thead>
        <tbody>
            <?php
$temp = 0;
foreach ($list_prime as $item) {
    $temp++;
    echo $item;

    ?>
            <tr>
                <td align="center"><?php echo $temp; ?></td>
                <td align="center"><?php echo $item; ?></td>
            </tr>

            <?php
}
?>

            <!-- <tr>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>7</td>
            </tr> -->
        </tbody>
    </table>
</body>

</html>