<?php
get_header('product');
?>
<?php
//Xuất dữ liệu
$num_rows = db_num_rows("SELECT * FROM `tbl_users`");
// show_array($list_users);
// số bản ghi mỗi trang
$num_per_page = 5;
// sồ bản ghi
$total_row= $num_rows;
// echo $total_row."<br>";
//tống số trang
$num_page = ceil($total_row/$num_per_page);
// echo $num_page;
$page = isset($_GET['page'])?(int)$_GET['page']:1;
$start = ($page - 1)*$num_per_page;

// echo $page;

$list_users=get_users($start,$num_per_page);


foreach($list_users as &$user){
    $user['url_update'] = "?mod=user&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=user&act=delete&id={$user['user_id']}";
}
unset($user);


?>

<div id="content">
    <a href="?mod=user&act=add" class="add_new">Thêm thành viên</a>
    <h1>Danh sách thành viên</h1>
    <?php if(!empty($list_users)){ ?>
    <table class="table_data">
        <thead>
            <tr>
                <td>Stt</td>
                <td>Id</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $temp = $start;
            foreach($list_users as $user){
                $temp++;
?>

            <tr>
                <td><?php echo $temp; ?></td>
                <td><?php echo $user['user_id']; ?></td>
                <td><?php echo $user['fullname']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo show_gender($user['gender']); ?></td>
                <td><a href="<?php echo $user['url_update']; ?>">Sửa</a> | <a
                        href="<?php echo $user['url_delete']; ?>">Xóa</a></td>
            </tr>


            <?php
            }
            ?>

        </tbody>
    </table>
    <p class="num_rows">có <?php echo $num_rows; ?> thành viên trong hệ thống</p>
    <?php
    echo get_pagging($num_page,$page,"?mod=user&act=main");
    
    ?>
    <div class="clearfix"></div>
    <?php }?>

</div>

<?php
get_footer();
?>