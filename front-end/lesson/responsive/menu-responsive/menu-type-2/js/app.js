$(document).ready(function(){
    $('#icon-menu-responsive').click(function(){
        //click xong => menu hien thị bằng xổ từ trên xuống
        $('#respon-menu').slideToggle();
        //slideDown, slideUp, slideToggle
        return false;
    });
    $(window).resize(function(){
        //nếu màn hình có độ rộng lớn hơn 768px thì respon-menu diplay none
        if($(document).width() >= 768){
            $('#respon-menu').css('display','none');
        }
    });
    
});