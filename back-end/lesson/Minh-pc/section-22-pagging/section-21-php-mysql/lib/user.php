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

?>