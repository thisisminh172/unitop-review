$(document).ready(function(){
    $("#check_ajax").click(function(){
        var data_id = $(this).attr("data-id");
        var data = {id:data_id};
        // alert (data_id);

        $.ajax({
            url:'?mod=order&action=update',
            method:'POST',
            data:data,
            dataType:'text',
            success: function(data){
                alert(data);
            },
            error: function(xhr, ajaxOPtions, thrownError){
                alert(xhr.status);
                alert(thrownError);
              }
        });
        return false;
    });
});