
jQuery(document).ready(function($) {

    $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800,'swing');
    });
    });

    $(function () {
    $('input[type="checkbox"], input[type="radio"], select').uniform();
    });

$(document).ready(function($) {
  $('.social i').tooltip('hide')
});

  var wow = new WOW(
  {
    boxClass:     'wowload',
    animateClass: 'animated',
    offset:       0,
    mobile:       true,
    live:         true
  }
);
wow.init();


$('.carousel').swipe( {
     swipeLeft: function() {
         $(this).carousel('next');
     },
     swipeRight: function() {
         $(this).carousel('prev');
     },
     allowPageScroll: 'vertical'
 });
