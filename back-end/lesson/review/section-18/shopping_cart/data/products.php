<?php
#danh mục
/**
 * id=> id
 * tiêu đề => cat_title
 */
$list_product_cat = array(
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

#du lieu san pham
/**
 * id=>id
 * tên sản phẩm=>product_title
 * giá=>price
 * Mã sản phẫm => code
 * Mô tả => product_desc
 * Ảnh đại diện => product_thumb => url
 * Nội dung => product_content
 * id danh mục => cat_id
 */

 $list_product = array(
     1=>array(
         'id'=>1,
         'product_title'=>'iPhone Xs Max 256GB',
         'price'=>25990000,
         'code'=>'UI#1',
         'product_desc'=>'iPhone Xs Max được Apple trang bị cho con chip mới toanh hàng đầu của hãng mang tên Apple A12.',
         'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-400x400.jpg',
         'product_content'=>'<p>Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max 256 GB. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.</p><p><img src="https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-gold-12.jpg"></p>',
         'cat_id'=>1
     ),
     2=>array(
        'id'=>2,
        'product_title'=>'Xiaomi Redmi 9 (4GB/64GB)',
        'price'=>15000000,
        'code'=>'UI#2',
        'product_desc'=>'Thông số kỹ thuật chi tiết Xiaomi Redmi 9 (4GB/64GB)',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/217308/xiaomi-redmi-9-114620-094644-400x400.jpg',
        'product_content'=>'<p>Realme 6i có thiết kế màn hình giọt nước 6.5 inch, tràn viền hợp xu hướng, công nghệ IPS LCD, độ phân giải HD+ và tỷ lệ khung hình 20:9 cho trải nghiệm tương đối thoải mái, mọi thông tin và hình ảnh đều được hiển thị rõ ràng, màu sắc chính xác.</p><p><img src="https://cdn.tgdd.vn/Products/Images/42/218360/realme-6i2-1.jpg"></p>',
        'cat_id'=>1
    ),
    3=>array(
        'id'=>3,
        'product_title'=>'Điện thoại Samsung Galaxy S20 Ultra',
        'price'=>25990000,
        'code'=>'UI#3',
        'product_desc'=>'camera độ phân giải siêu khủng 108 MP',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/223657/acer-aspire-a514-53-5921-i5-nxhupsv001-223657-400x400.jpg',
        'product_content'=>'<p>Màn hình trên Galaxy S20 Ultra có tần số quét lên tới 120 Hz cho từng chuyển động trên máy diễn ra siêu mượt, dễ dàng nhận thấy ở cả các thao tác vuốt hàng ngày. Máy cho phép chuyển qua lại giữa chế độ 120 Hz và 60 Hz để tiết kiệm pin khi cần thiết.</p><p><img src="https://cdn.tgdd.vn/Products/Images/42/217937/samsung-galaxy-s20-ultra7.jpg"></p>',
        'cat_id'=>1
    ),
    4=>array(
        'id'=>4,
        'product_title'=>'Laptop Asus VivoBook X409FA i3 8145U/4GB/256GB/Win10 (EK468T)
        ',
        'price'=>15990000,
        'code'=>'UI#4',
        'product_desc'=>'Ưu đãi khi mua Phụ Kiện cùng Asus VivoBook X409FA i3 8145U/4GB/256GB/Win10 (EK468T)',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/221618/asus-vivobook-x409fa-i3-ek468t-221618-1-600x600.jpg',
        'product_content'=>'<p>Laptop Asus VivoBook X409FA i3 (EK468T) là mẫu máy tính xách tay học tập văn phòng cơ bản, có cấu hình đủ dùng cho nhu cầu học tập và giải trí thường ngày. Với thiết kế mỏng nhẹ, Asus VivoBook X409FA có thể đồng hành cùng bạn mọi lúc mọi nơi. </p><p><img src="https://cdn.tgdd.vn/Products/Images/44/221618/Slider/asus-vivobook-x409fa-i3-ek468t-042920-112957-314.jpg"></p>',
        'cat_id'=>2
    ),
    5=>array(
        'id'=>5,
        'product_title'=>'Acer Nitro 5 AN515 55 58A7 i5 10300H (NH.Q7RSV.002)',
        'price'=>23990000,
        'code'=>'UI#5',
        'product_desc'=>'Ưu đãi khi mua Phụ Kiện cùng Acer Nitro 5 AN515 55 58A7 i5 10300H 8GB/512GB/4GB GTX1650/Win10 (NH.Q7RSV.002)',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/223539/acer-nitro-5-an515-55-58a7-i5-nhq7rsv002-223539-400x400.jpg',
        'product_content'=>'<p>Phiên bản này sử dụng con chip Intel Core i5 thế hệ 10 có xung nhịp tối đa đến 4.5 GHz, hoạt động ổn định, trơn tru. RAM 8 GB (có thể nâng cấp lên 32 GB) cho khả năng đa nhiệm nhanh chóng, sử dụng được nhiều ứng dụng cùng lúc hoặc mở đến 20 tab Chrome mà không giật, lắc máy. </p><p><img src="https://cdn.tgdd.vn/Products/Images/44/223539/acer-nitro-5-an515-55-58a7-i5-nhq7rsv002-ca%CC%82%CC%81uhi%CC%80nh.jpg"></p>',
        'cat_id'=>2
    ),
    6=>array(
        'id'=>6,
        'product_title'=>'MacBook Air 2020 i5 256GB (Z0YL)',
        'price'=>30880000,
        'code'=>'UI#6',
        'product_desc'=>'Ưu đãi khi mua Phụ Kiện cùng Apple MacBook Air 2020 i5 1.1GHz/8GB/256GB (Z0YL)',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/220173/apple-macbook-air-2020-gold-1-400x400.jpg',
        'product_content'=>'<p>MacBook Air 2020 là phiên bản có nhiều nâng cấp vượt trội về cấu hình và thiết kế bàn phím, hứa hẹn đem tới trải nghiệm mượt mà, thoải mái hơn tới người dùng. Chiếc máy vẫn là lựa chọn số 1 dành cho các anh em văn phòng muốn sở hữu chiếc laptop mỏng nhẹ, mượt mà và pin lâu.</p><p><img src="https://cdn.tgdd.vn/Products/Images/44/220173/apple-macbook-air-2020-corei5.jpg"></p>',
        'cat_id'=>2
    ),
 );

