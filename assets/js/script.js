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
 
 $(document).ready(function(){
     $('.counter-value').each(function(){
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
         },{
             duration: 3500,
             easing: 'swing',
             step: function (now){
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });