<?php
//get page by id
/**
 * khai báo giá trị trả về
 */
function get_page_by_id($id){
    global $list_page;
    if(array_key_exists($id,$list_page)){
        return $list_page[$id];
    }
    return false;
}

?>