<?php
get_header();
?>
<div id="content">
    <h1>danh sách thành viên</h1>
    <table>
        <thead>
            <tr>
                <td>Stt</td>
                <td>Họ và tên</td>
                <td>Email</td>
                <td>Tuổi</td>
                <td>Thu nhập</td>
            </tr>
        </thead>
        <tbody>
            <?php
if (!empty($list_users)) {
    $temp =0;
    foreach ($list_users as $user) {
        $temp++;
        ?>
            <tr>
                <td><?php echo $temp; ?></td>
                <td><?php echo $user['fullname']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['age']; ?></td>
                <td><?php echo currency_format($user['salary'],'usd'); ?></td>
            </tr>

            <?php
}
}
?>

        </tbody>
    </table>
</div>
<?php
get_footer();
?>
