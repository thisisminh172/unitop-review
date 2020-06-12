<?php
#1. tính số trang $num_page hiển thị khi có tổng số bài $total_rows và số bài trên mỗi trang $num_per_page
$num_page = 3;
$total_rows = 10;
$num_per_page = ceil($total_rows/$num_page);
echo $num_per_page."<br>";
#2. xuất một bảng số nguyên chẵn từ một mảng số nguyên cho trước
$list_num = array();
$n = 20;
$index = 0;
for($i = 1; $i<=$n;$i++){
    $list_num[$index]=$i;
    $index++;
}
echo"<pre>";
print_r ($list_num);
echo "</pre>";
$list_even_number= array();
foreach($list_num as $value){
    if($value%2==0){
        $list_even_number[]=$value;
    }
}
echo "<pre>";
print_r($list_even_number);
echo "</pre>";

#3. hiển thị mảng danh mục theo đa cấp

$list_post_cat = array(
    1 => array(
        'cat_id'=>1,
        'cat_title'=> 'Giáo dục',
        'level'=>0
    ),
    2 => array(
        'cat_id'=>2,
        'cat_title'=> 'khuyến học',
        'level'=>1
    ),
    3=> array(
        'cat_id'=>3,
        'cat_title'=> 'Du học',
        'level'=>1
    ),
    4 => array(
        'cat_id'=>4,
        'cat_title'=> 'Du lịch',
        'level'=>0
    ),
    5=> array(
        'cat_id'=>5,
        'cat_title'=> 'Châu âu',
        'level'=>1
    ),
    6=> array(
        'cat_id'=>6,
        'cat_title'=> 'Châu Á',
        'level'=>1
    ),
    7=> array(
        'cat_id'=>7,
        'cat_title'=> 'Seagame',
        'level'=>2
    )
    );
?>

<html>
        <head>
            <title>Bài tập 9</title>
        </head>
        <body>
            <table>
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Tên</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(!empty($list_post_cat)){
                    $temp = 0;
                    foreach($list_post_cat as $item){
                        $temp++;
                        ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo str_repeat('----',$item['level']).$item['cat_title'];?></td>
                    </tr>
                        <?php
                    }
                }
                ?>
                    
                </tbody>
            </table>
        </body>
</html>