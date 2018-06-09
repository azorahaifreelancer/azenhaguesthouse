<?php include('book.php');?>
<?php include 'header.php';?>

<!-- banner -->
<div class="banner">
    <img src="images/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown tituloTop">Azenha GuestHouse</h1>
                <h2 class="animated fadeInUp tituloTop">Turismo Rural - Foz do Arelho</h2>
                <p class="animated fadeInUp tituloTop">Quartos - Rooms - Chambres - Zimmer</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->

<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/FxnD5AqFVzo" frameborder="0" allow="autoplay; encrypted-media" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Pedido de Reserva</h3>
    <form role="form" class="wowload fadeInRight" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Por favor, indique que leu os nossos Termos e Condições, e Política de Privacidade e Proteção de Dados'); return false; }">
        <div class="form-group">
            <input type="text" class="form-control" name="name" value="<?= $name ?>"  placeholder="Nome">
            <span class="error"><?= $name_error ?></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" value="<?= $email ?>"  placeholder="Email">
            <span class="error"><?= $email_error ?></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" value="<?= $phone ?>"  placeholder="Telefone">
        </div>
          <!--
          <div class="form-group">
            <div class="row">
              <div class="col-xs-6">
              <select class="form-control" name="adultos">
                <option>No. Adultos</option>
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
              </div>
              <div class="col-xs-6">
              <select class="form-control" name="criancas">
                <option>No. Crianças</option>
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-xs-4">
                <select class="form-control col-sm-2" name="dia" id="expiry-month">
                  <option>Dia</option>
                  <option value="01">1</option>
                  <option value="02">2</option>
                  <option value="03">3</option>
                  <option value="04">4</option>
                  <option value="05">5</option>
                  <option value="06">6</option>
                  <option value="07">7</option>
                  <option value="08">8</option>
                  <option value="09">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>
              <div class="col-xs-4">
                <select class="form-control col-sm-2" name="mes">
                  <option>Mês</option>
                  <option value="Janeiro">Janeiro</option>
                  <option value="Fevereiro">Fevereiro</option>
                  <option value="Março">Março</option>
                  <option value="Abril">Abril</option>
                  <option value="Maio">Maio</option>
                  <option value="Junho">Junho</option>
                  <option value="Julho">Julho</option>
                  <option value="Agosto">Agosto</option>
                  <option value="Setembro">Setembro</option>
                  <option value="Outubro">Outubro</option>
                  <option value="Novembro">Novembro</option>
                  <option value="Dezembro">Dezembro</option>
                </select>
              </div>
              <div class="col-xs-4">
                <select class="form-control" name="ano">
                  <option>Ano</option>
                  <option value="18">2018</option>
                  <option value="19">2019</option>
                </select>
              </div>
            </div>
          </div>
          -->
          <div class="form-group mensagem">
              <textarea class="form-control"  placeholder="Messagem" rows="4" value="<?= $message ?>" name="mensagem"></textarea>
          </div>

          <div class="form-group concordo">
            <div class="politicas">
            <input type="checkbox" name="checkbox" value="check" id="agree" /><span class="aceito">Li e aceito os<a href="terms.php"> Termos e Condições</a> e a <a href="policy.php">  Política de Privacidade.</a></span>
          </div>
            <div class="condicoes">
            <input type="checkbox" name="checkbox" value="check" id="agree" /><span class="aceito">Li e aceito as<a href="condicoes.php"> Condições de Reserva</a></span>
          </div>
          </div>

        <button class="btn btn-default enviar" id="contact-submit" type="submit" name="submit" data-submit="...Sending">Enviar</button>
        <div class="success"><?= $success ?></div>
    </form>

</div>
</div>
</div>
</div>
</div>
<!-- reservation-information -->

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/quartos/verde-2.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/quartos/azul-4.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/quartos/amarelo-1.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/quartos/azul-2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/quartos/verde-3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/quartos/vermelho-2.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Quartos<a href="quartos.php" class="pull-right"><i class="fa fa-bed"></i></a></div>
        </div>
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/galeria/4.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/5.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/6.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/8.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/9.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">A Casa<a href="casa.php" class="pull-right"><i class="fa fa-home"></i></a></div>
        </div>
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/galeria/11.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/1.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/4.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/7.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/galeria/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Galeria<a href="gallery.php" class="pull-right"><i class="fa fa-galery"></i></a></div>
        </div>
    </div>
</div>

</div>

<!-- contatcos -->
<div class="container">
<!-- form -->
<div class="contact">



       <div class="row">

        <div class="col-sm-12">
        <div id="map" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1540.8086522729209!2d-9.215382418585218!3d39.43277754165361!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2spt!4v1493653254016" width="100%" height="300" frameborder="0"></iframe>
        </div>
       </div>
</div>
</div>
<!-- form -->

</div>

<?php include 'footer.php';?>
