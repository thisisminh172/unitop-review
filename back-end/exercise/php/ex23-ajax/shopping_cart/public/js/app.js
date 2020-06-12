$(document).ready(function () {
  $("input.num-order").change(function () {
    // alert("ok");
    var id = $(this).attr("data-id");
    // alert(price);
    var qty = $(this).val();
    var data = { id: id, qty: qty };

    $.ajax({
      url: "?mod=cart&act=update_ajax",
      method: "POST", //GET
      data: data,
      dataType: "json",
      success: function (data) {
        $("#sub-total-"+id).html("<b>" + data.sub_total + "</b>");
        $("#total-price span").text(data.total);
      },
      error: function (xhr, ajaxOPtions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      },
    });
  });
});
