<?php

function construct(){
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
}

function indexAction(){
    load_view('index');
 
}

function detailAction(){
    echo $_GET['mod'];
    echo $_GET['slug'];
    load_view('index');
 
}

function addAction(){
    echo "thêm dữ liệu";
}

function editAction(){
    
}