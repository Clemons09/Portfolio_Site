
$(document).ready(function() {
  $("#fixings1").hide();
  $(".fa-times").hide();
  $(".fa-bars").click(function() {
    $("#fixings1").toggle("slow");
    $(".fa-bars").hide();
    $(".headline").hide();
    $(".fa-times").show();
  });
  $(".fa-times").click(function() {
    $("#fixings1").toggle("slow");
    $(".fa-times").hide();
    $(".headline").show();
    $(".fa-bars").show();
  });
});

