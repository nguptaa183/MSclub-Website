$(document).ready(function () {

  var div_box = "<div id='load-screen'><div id='loading' class='img-fluid'></div></div>";
  $("body").prepend(div_box);

  $('#load-screen').delay(700).fadeOut(600, function () {
    $(this).remove();
  });


});