// navbar scroll
$(document).ready(function(){
  $(window).on("scroll",function(){
    var wn = $(window).scrollTop();
    if(wn > 215){
      $(".navbar").css("background","rgba(0,0,0,0.9)");
    }
    else{
      $(".navbar").css("background","rgba(0,0,0,0)");
    }
  });
});

// tooltip
$(function () {
    $("[data-toggle='tooltip']").tooltip();
});
