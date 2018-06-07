// navbar scroll
$(document).ready(function () {
  $(window).on("scroll", function () {
    var wn = $(window).scrollTop();
    if (wn > 215) {
      $(".navbar").css("background", "#21242A");
    } else {
      $(".navbar").css("background", "rgba(0,0,0,0)");
    }
  });
});

// tooltip
$(function () {
  $("[data-toggle='tooltip']").tooltip();
});

// counterstyle
$('.statistic-counter_two, .statistic-counter, .count-number').counterUp({
  delay: 10,
  time: 2000
});