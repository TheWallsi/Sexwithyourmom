$(document).ready(function() {

  setTimeout(function() {
    $("#call-but-m1").show();
  }, 20000);

  $('.btn-order').on("click",function() {
    $("html, body").animate({
      scrollTop: $("#formScroll").offset().top
    }, 2000);
    return false;
  });

  $('.scroll1').on("click",function() {
    $("html, body").animate({
      scrollTop: $("#reviews").offset().top
    }, 2000);
    return false;
  });

  
});
