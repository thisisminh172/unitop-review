<?php
#GET dữ liệu từ url
$mod=$_GET['mod'];
$act=$_GET['act'];
$id = $_GET['id'];
echo "{$mod}-{$act}-{$id}";
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
//sử dụng hàm isset để check btn_search đã được click chưa, hoặc đã được truyền dữ liệu chưa
if(isset($_GET['btn_search'])){
show_array($_GET);
$q = $_GET['q'];
echo $q;

}

?>
<html>
    <head>
        <title>Truyền dữ liệu form phương thức GET</title>
    </head>
    <body>
        <a href="?mod=product&act=detail&id=1268">sản phẩm</a>
        <h1>form search</h1>
        <form action="" method="GET">
            Tìm kiếm: <input type="text" name="q" id="">
            <input type="submit" value="Search" name="btn_search">
        </form>
    </body>
</html>
