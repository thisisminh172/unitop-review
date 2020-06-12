<?php

function show_gender($gender){
    $list_users = array(
        'male'=>'Nam',
        'female'=>'Nữ'
    );
    if(array_key_exists($gender,$list_users)){
        return $list_users[$gender];
    }
}

function get_users($start=1,$num_per_page=10,$where =""){
if(!empty($where)){
    $where = "WHERE {$where}";
}
$list_users = db_fetch_array("SELECT * FROM `tbl_users` {$where} LIMIT {$start},{$num_per_page}");
return $list_users;
}

?>