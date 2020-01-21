$(document).ready(
function hitter() {
  $(".hit).click (function(){
    // Close all open windows
    $(".hit .content").stop().slideUp(300);
    // Toggle this window open/close
    $(this).next(".content").stop().slideToggle(300);
  });

hitter();


});
