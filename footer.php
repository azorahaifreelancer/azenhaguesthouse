
<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Azenha GuestHouse</h4>
                    <p>A apenas 5 min a pé da Lagoa e do Mar e a 10min dos restaurantes, bares, supermercados e outros serviços da Vila. O edifício, uma antiga azenha que servia de apoio à população para a moagem dos cereais, foi totalmente renovado e apresenta um toque de modernidade, embora mantendo a sua traça original. A Guest House oferece 4 quartos com terraço e uma sala comum com esplanada, onde poderá desfrutar calmamente do seu pequeno-almoço. Inserida numa propriedade de um hectare onde a natureza predomina, a Azenha Gest House é o local certo para relaxar e desfrutar de momentos únicos, num espaço onde o campo e a Lagoa se unem em perfeita harmonia.</p>
                </div>
                 <div class="col-sm-3">
                    <h4>Links Úteis</h4>
                    <ul class="list-unstyled">
                        <li><a href="quartos.php">Quartos</a></li>
                        <li><a href="casa.php">A Casa</a></li>
                        <li><a href="gallery.php">Galeria</a></li>
                        <li><a href="azul.php">Quarto Azul</a></li>
                        <li><a href="amarelo.php">Quarto Amarelo</a></li>
                        <li><a href="verde.php">Quarto Verde</a></li>
                        <li><a href="vermelho.php">Quarto Vermelho</a></li>
                        <li><a href="terms.php">Termos e Condições</a></li>
                        <li><a href="policy.php">Politica de Privacidade</a></li>
                        <li><a href="condicoes.php">Condições de Reserva</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Contactos</h4>
                      <i class="fa fa-home"></i>  7  Rua da Azenha
                         <p>Foz do Arelho<br>
                         PT 2500 450<br>
                      <a target="_blank" href="https://goo.gl/maps/F6HYSkXJtwL2">PEDIR DIREÇAÕ - GPS</a><br>
                       LAT 39.431707
                      <br>
                       LNG -9.215150<br>
                        <i class="fa fa-phone"></i> 351 96 58 68 037<br>
                        <i class="fa fa-envelope"></i><a href="mailto:azenhaguesthouse@gmail.com">  azenhaguesthouse@gmail.com</a>
                    <div class="social">
                      <a target="_blank" href="https://www.facebook.com/azenhaguesthouse/"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                      <a target="_blank" href="https://www.instagram.com/azenhaguesthouse_turismorural/"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                      <a target="_blank" href="https://www.booking.com/hotel/pt/azenha-guest-house.pt-pt.html"><i class="fa fa-bold"  data-toggle="tooltip" data-placement="top" data-original-title="booking"></i></a>
                    </div>
                </div>
            </div>
        </div>
</footer>
<div class="text-center copyright">Powered by <a href="https://www.instagram.com/nuno____santos/">nsantos</a></div>
<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>

<script type="application/javascript">
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

</script>
<script src="assets/jquery.js"></script>
<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>
<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>
<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>
<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>
<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>
