
$(document).ready(function() {
  $("#fixings1").hide();
  $(".fa-times").hide();

  $(".fa-bars").click(function() {
    $("#fixings1").toggle("slow");
    $(".fa-bars").hide();
    $(".dropdown-content").show("slow");
    $(".headline").hide();
    $(".fa-times").show();
  });
  $(".fa-times").click(function() {
    $("#fixings1").toggle("slow");
    $(".fa-times").hide();
    $(".dropdown-content").hide();
    $(".headline").show(1000);
    $(".fa-bars").show();
  });
});

