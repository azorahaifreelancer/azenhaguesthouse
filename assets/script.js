
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


 var name = document.getElementById("template-contactform-name");
 var email = document.getElementById("template-contactform-email");
 var phone = document.getElementById("template-contactform-phone");
 var message = document.getElementById("template-contactform-message");
 var mail = document.getElementsByClassName("email_sent")[0];
 var mailSubmit = document.getElementById("template-contactform-submit");

 function validateEmail(emailValue) {
     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     return re.test(emailValue);
 }

 mailSubmit.onclick = function() {
     if (name.value != '' && email.value != '' && phone.value != '' && message.value != '') {
         if (validateEmail(email.value)) {
             mail.style.display = "block";
             setTimeout(function() {
                 mail.style.display = "none";
             }, 3000);
         }

     }
 }
