<?php

$id = (int)$_GET['id'];


?>

<?php
get_header('product');
?>
<?php
if(isset($_POST['btn_update'])){
    $error = array();
    $alert = array();
    //fullname
    if(empty($_POST['fullname'])){
        $error['fullname']="Họ tên không được để trống";
    }else{
        $fullname = $_POST['fullname'];
    }

    

    

    //giới tính
    if(empty($_POST['gender'])){
        $error['gender']="Xin chọn giới tính";
    }else {
        $gender = $_POST['gender'];
    }



//kết luận
    if (empty($error)) {
    //xử lý không có  lỗi
    $sql = "UPDATE `tbl_users` SET `fullname` = '{$fullname}', `gender` = '{$gender}' WHERE `user_id`={$id}";
    if(mysqli_query($conn,$sql)){
        $alert['success'] ="Cập nhật dữ liệu thành công";
    }else{
        echo "Lỗi:" . mysqli_error($conn);
    }
    }
}
$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = {$id}";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_array($result);

?>

<div id="content">
    <h1>Thêm mới</h1>
    <form action="" method="POST">
    <?php 
    
    if(!empty($alert['success'])){?>
    <p class="success"><?php echo $alert['success'];?></p>
        
        <?php
    }
    
    ?>
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<?php if(!empty($item['fullname'])){ echo $item['fullname'];} ?>">
        <?php echo form_error('fullname'); ?>
       

        
        <select name="gender" id="gender">
            <option value="">--Chọn giới tính--</option>
            <option <?php if(isset($item['gender']) && $item['gender']=='male') echo "selected='selected'"; ?> value="male">Nam</option>
            <option <?php if(isset($item['gender']) && $item['gender']=='female') echo "selected='selected'"; ?> value="female">Nữ</option>
        </select>
        <?php echo form_error('gender'); ?>
        
        <input type="submit" value="Cập nhật" name="btn_update">
    </form>
</div>

<?php
get_footer();
?>