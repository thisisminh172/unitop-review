<?php
#Danh mục sản phẩm
/**
 * id=> id
 * Tên danh mục => cat_title
 */
$list_product_cat=array(
    1=>array(
        'id'=>1,
        'cat_title'=>'Điện thoại'
    ),
    2=>array(
        'id'=>2,
        'cat_title'=>'Laptop'
    ),
    3=>array(
        'id'=>3,
        'cat_title'=>'Máy tính bảng'
    ),
);

#Dữ liệu sản phẩm
/**
 * id=> id
 * Tên sản phẩm => product_title
 * Giá sản phẩm => price
 * ma sản phẩm=>code
 * mô tả => product_desc
 * Ảnh đại diện=>product_thumb => url
 * Nội dung=> product_content
 * id danh mục => cat_id
 */
$list_product=array(
    1=>array(
        'id'=>1,
        'product_title'=>'Samsung Galaxy Z Flip',
        'price'=>36000000,
        'code'=>'UNI#1',
        'product_desc'=>'Cuối cùng sau bao nhiêu thời gian chờ đợi, chiếc điện thoại Samsung Galaxy Z Flip đã được Samsung ra mắt tại sự kiện Unpacked 2020',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-den-600x600-400x400.jpg',
        'product_content'=>"<p>Trải nghiệm sử dụng Samsung Galaxy Z Flip linh hoạt nhờ kết cấu bản lề mới hiện đại, có khả năng chống bụi bẩn tốt hơn. Tuy vẫn có vết gấp giữa màn hình Galaxy Z Flip nhưng hoàn toàn không ảnh hưởng đến trải nghiệm người dùng.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd16.jpg'></p>",
        'cat_id'=>1
    ),
    2=>array(
        'id'=>2,
        'product_title'=>'iPhone 11 Pro Max 64GB',
        'price'=>31890000,
        'code'=>'UNI#2',
        'product_desc'=>'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-green-400x400.jpg',
        'product_content'=>"<p>Chúng ta sẽ có một camera góc thường, một camera góc rộng và một camera tele đáp ứng đầy đủ nhu cầu chụp ảnh hàng ngày của người dùng.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd6-1.jpg'></p>",
        'cat_id'=>1
    ),
    3=>array(
        'id'=>3,
        'product_title'=>'Xiaomi Redmi 8 (4GB/64GB)',
        'price'=>3190000,
        'code'=>'UNI#3',
        'product_desc'=>'Với nhiều ưu điểm vượt trội so với các đối thủ, Xiaomi Redmi 8 4GB/64GB hứa hẹn',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-red-400x400.jpg',
        'product_content'=>"<p>Chúng ta sẽ có một camera góc thường, một camera góc rộng và một camera tele đáp ứng đầy đủ nhu cầu chụp ảnh hàng ngày của người dùng.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd6-1.jpg'></p>",
        'cat_id'=>1
    ),
    4=>array(
        'id'=>4,
        'product_title'=>'Laptop HP 15s du0072TX i3 7020U/4GB/256GB/2GB MX110/Win10',
        'price'=>1290000,
        'code'=>'UNI#4',
        'product_desc'=>'Laptop HP 15s du0072TX (8WP16PA) là một chiếc laptop văn phòng có cấu hình ổn định cùng với màn hình lớn',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/216813/hp-15s-du0072tx-i3-7020u-4gb-256gb-2gb-mx110-win10-1-400x400.jpg',
        'product_content'=>"<p>Laptop HP 15s du0072TX (8WP16PA) là một chiếc laptop văn phòng có cấu hình ổn định cùng với màn hình lớn</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/216813/hp-15s-du0072tx-i3-7020u-4gb-256gb-2gb-mx110-win10-i3.jpg'></p>",
        'cat_id'=>2
    ),
    5=>array(
        'id'=>5,
        'product_title'=>'Apple Macbook Pro Touch 2019 i5 1.4GHz/8GB/128GB',
        'price'=>33090000,
        'code'=>'UNI#5',
        'product_desc'=>'Laptop Apple MacBook Pro Touch 2019 i5 (MUHN2SA/A) là thế hệ laptop mới của dòng MacBook Pro',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/216813/hp-15s-du0072tx-i3-7020u-4gb-256gb-2gb-mx110-win10-1-400x400.jpg',
        'product_content'=>"<p>Laptop Apple MacBook Pro Touch 2019 i5 (MUHN2SA/A) là thế hệ laptop mới của dòng MacBook Pro</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/207683/apple-macbook-pro-touch-2019-i5-14ghz-8gb-128gb-m3.jpg'></p>",
        'cat_id'=>2
    ),
    6=>array(
        'id'=>6,
        'product_title'=>'Macbook Pro Touch 16 inch 2019 i7 2.6GHz/16GB/512GB/4GB Radeon Pro 5300M',
        'price'=>53000000,
        'code'=>'UNI#6',
        'product_desc'=>'MacBook ProTouch 2019 i7 chiếc laptop cấu hình mạnh mẽ của Apple sẽ đem đến những trải nghiệm mà không phải chiếc laptop nào cũng có được. ',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/215941/macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg',
        'product_content'=>"<p>MacBook ProTouch 2019 i7 chiếc laptop cấu hình mạnh mẽ của Apple sẽ đem đến những trải nghiệm mà không phải chiếc laptop nào cũng có được.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/215941/macbook-pro-16-201924.jpg'></p>",
        'cat_id'=>2
    ),
);
?>