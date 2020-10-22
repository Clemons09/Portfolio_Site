$(document).ready(function() {
  $("#dropdown-content").hide();

  $("#panel").click(function() {
    $("#dropdown-content").slideToggle("slow");
  });

});
