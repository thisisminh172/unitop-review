<?php
//=========================================================
//=========================================================
//is_full
function is_fullname($fullname){
    $pattern = "/^[a-zA-Z]{,100}$/";
    if(!preg_match($pattern,$_POST['fullname']))
        return false;
    return true;
}
//=========================================================
//=========================================================
//is_username
function is_username($username){
    $pattern = "/^[a-zA-Z0-9_\.]{6,32}$/";
    if (!preg_match($pattern, $_POST['username']))
        return false;
    return true;
}

//=========================================================
//=========================================================
//is_password
function is_password($password)
{
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($pattern, $_POST['password'])) {
        return false;
    }

    return true;
}
//=========================================================
//=========================================================
//is_email
function is_email($email){
    $pattern = "/^[A-Za-z0-9_.]{6,32}@([A-Za-z0-9]{2,12}(.[a-zA-Z]{2,12})+$/";
    if(!preg_match($pattern, $_POST['email']))
        return false;
    return true;
}


//=========================================================
//=========================================================
//is_phone
function is_phone($phone){
    $pattern = "/^[0-9]{9,12}+$/";
    if (!preg_match($pattern, $_POST['phone'])) {
    return false;
    }
    return true;

}


//=========================================================
//=========================================================
//form_error
function form_error($label_field){
    global $error;
    if(!empty($error[$label_field])) return "<p class='error'> {$error[$label_field]} <p>";
    
}
//=========================================================
//=========================================================
//set_value
function set_value($label_field){//'username', chỉ là tên, là chuỗi
    global $$label_field; // cho chuỗi thành biến
    if (!empty($$label_field)) return $$label_field;
}


?>