$(document).ready(function(){
    //code ứng dụng
    //alert('nội dung dược hiển thị jquery');
    $('a#change_color').click(function(){
        $('h1').css('color','red');
        return false;//để trang không load lại để giữ màu
    });
    
});