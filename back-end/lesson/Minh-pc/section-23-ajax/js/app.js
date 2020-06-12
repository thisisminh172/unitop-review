$(document).ready(function () {
  $("#num_order").change(function () {
    var price = $("#price").text();
    var num_order = $("#num_order").val();
    var data = { num_order: num_order, price: price };

    // alert (data);
    $.ajax({
      url: "process.php",
      method: "POST", //GET
      data: data,
      dataType: "text",
      success: function (data) {
        $("#total").html("<b>" + data + "</b>");
      },
      error: function(xhr, ajaxOPtions, thrownError){
        alert(xhr.status);
        alert(thrownError);
      }
    });
  });
});
