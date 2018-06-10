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
<div class="email_sent" style="display:none;position:absolute;top:15px;left:35%;width:250px;height:100px;background-color:white;color:black;z-index:50;border-radius: 25px;border: 2px solid #2db2a6;">
<div style="position:relative;margin:auto;width:180px;height:50px;top:40%;">
    <p>Email enviado com sucesso</p>
</div>
</div>
    <form role="form" class="wowload fadeInRight" id="template-contactform" name="template-contactform" action="book.php" method="post" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Por favor, indique que leu os nossos Termos e Condições, e Política de Privacidade e Proteção de Dados'); return false; }">
        <div class="form-group">
            <input type="text" class="form-control" id="template-contactform-name" name="template-contactform-name"  placeholder="Nome" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="template-contactform-email" name="template-contactform-email"  placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="template-contactform-phone" name="template-contactform-phone"  placeholder="Telefone">
        </div>
          <div class="form-group mensagem">
              <textarea class="form-control" id="template-contactform-phone" name="template-contactform-message"  placeholder="Messagem" required></textarea>
          </div>
          <div class="form-group concordo">
            <div class="politicas">
            <input type="checkbox" name="checkbox" value="check" id="agree" /><span class="aceito">Li e aceito os<a href="terms.php"> Termos e Condições</a> e a <a href="policy.php">  Política de Privacidade.</a></span>
          </div>
            <div class="condicoes">
            <input type="checkbox" name="checkbox" value="check" id="agree" /><span class="aceito">Li e aceito as<a href="condicoes.php"> Condições de Reserva</a></span>
          </div>
          </div>
        <button class="btn btn-default enviar" id="template-contactform-submit" name="template-contactform-submit" type="submit">Enviar</button>

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
</div>
<?php include 'footer.php';?>
