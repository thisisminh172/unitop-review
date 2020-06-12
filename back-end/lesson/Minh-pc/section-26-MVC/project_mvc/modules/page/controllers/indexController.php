<?php

function construct(){
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
}

function indexAction(){
    load_view('index');
 
}

function detailAction(){
    load_view('index');
 
}

function addAction(){
    echo "thêm dữ liệu";
}

function editAction(){
    
}