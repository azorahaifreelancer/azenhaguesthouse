jQuery(document).ready(function($) {

    $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800,'swing');
    });
    });

// uniform
    $(function () {
    $('input[type="checkbox"], input[type="radio"], select').uniform();
    });

// social icon
$(document).ready(function($) {
  $('.social i').tooltip('hide')
});

//

var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
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

//mapa
 var map;

 function initMap() {
     map = new google.maps.Map(document.getElementById('map'), {
         center: {
             lat: 39.433690,
             lng: -9.215190
         },
         zoom: 17.3
     });
     marker = new google.maps.Marker({
         map: map,
         draggable: true,
         animation: google.maps.Animation.DROP,
         position: {
             lat: 39.433300,
             lng: -9.215990
         },
         icon: "images/marker.svg"
     });
     marker.addListener('click', toggleBounce);
 }

 function toggleBounce() {
     if (marker.getAnimation() !== null) {
         marker.setAnimation(null);
     } else {
         marker.setAnimation(google.maps.Animation.BOUNCE);
     }
 }
