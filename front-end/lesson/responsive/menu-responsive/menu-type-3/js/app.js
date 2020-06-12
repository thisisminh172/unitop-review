$(document).ready(function() {
    $('#icon-menu-responsive').click(function() {
        $('#site').toggleClass('open-respon-menu');
    });
    $(window).resize(function() {
        //nếu màn hình có độ rộng lớn hơn 768px thì respon-menu diplay none
        if ($(document).width() >= 768) {
            $('#site').removeClass('open-respon-menu');
        }
    });

});