<?php
//====================
//xuất dữ liệu echo
//====================

$a = 100;
echo "học php tai unitop.vn";
echo "Giá trị của a: ".$a;
echo "Giá trị của a: $a";
echo "Giá trị của a: {$a}";

//====================
//xuất dữ liệu print_r
//====================

//====================
//xuất dữ liệu cho array
//====================

$my_array = array('A','B','C');
echo"<pre>";
print_r ($my_array);
echo"</pre>";

?>

<html>
    <head>
        <title>Cú pháp viết php</title>
    </head>
</html>
<body>
    <style>
        h1{
            color:red;
        }
    </style>

    <h1>Xin chào, tôi là <?php echo "Lê Minh"?></h1>
</body>