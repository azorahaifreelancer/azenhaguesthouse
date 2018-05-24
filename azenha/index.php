<?php include 'header.php';?>

<!-- banner -->
<div class="banner">
    <img src="images/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Foz do Arelho</h1>
                <p class="animated fadeInUp">Turismo Rural</p>
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
    <form role="form" class="wowload fadeInRight" method="post" action="book.php" name="book" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Por favor, indique que leu os nossos Termos e Condições, e Política de Privacidade e Proteção de Dados'); return false; }">
        <div class="form-group">
            <input type="text" class="form-control" name="nome"  placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control" name="telefone"  placeholder="Telefone">
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Messagem" rows="4" name="mensagem"></textarea>
        </div>

        <div class="form-group">
        <input type="checkbox" name="checkbox" value="check" id="agree" /><span class="aceito">Li e aceito os<a href="terms.php"> Termos e Condições</a> e a <a href="policy.php">  Política de Privacidade.</a><br><br></span>
        <input type="checkbox" name="checkbox" value="check" id="agree" /><span class="aceito">Li e aceito os termos da<a href="policy.php"> Proteção de dados.</a><br><br><br></span>
        </div>

        <button class="btn btn-default" type="submit" name="submit">Enviar</button>
    </form>
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
            <div class="caption">A Casa<a href="gallery.php" class="pull-right"><i class="fa fa-home"></i></a></div>
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
