<?php

function construct(){
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
}

function indexAction(){
    load('helper','format');
    $list_users = get_list_users();
    // show_array($list_users);
    //có 1 quy tắc
    $data['list_users'] = $list_users;
    $data['a']=100;
    load_view('index',$data);
 
}

function addAction(){
    echo "thêm dữ liệu";
}

function editAction(){
    $id=(int)$_GET['id'];
    $item = get_user_by_id($id);
    show_array($item);
}