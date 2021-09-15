<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Homarket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="goto-here">
    <div class="py-1 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">

          </div>
        </div>
      </div>
    </div>
    <?php
        session_start();
        
        if (isset($_SESSION["usera"] )){
            $link = new mysqli("localhost","root","","bdd");
           $consulta="SELECT nombre from  user where id ='".$_SESSION ["usera"]."' ";
          $re=$link ->query($consulta);
            $fil=$re->fetch_assoc();

    echo '<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">HOMARKET</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="sub-electro.php">home appliances</a>
                <a class="dropdown-item" href="sub-bebe.php">Babies</a>
                <a class="dropdown-item" href="sub-electronicos.php">Electronic</a>
                <a class="dropdown-item" href="sub-salud.php">Health</a>
                <a class="dropdown-item" href="sub-juegos.php">Toys</a>
                <a class="dropdown-item" href="carnes.php">Meats</a>
                <a class="dropdown-item" href="sub-bebidas.php">Drinks</a>
                <a class="dropdown-item" href="sub-limpieza.php">Cleaning and home</a>
                <a class="dropdown-item" href="sub-escuela.php">School zone</a>
                <a class="dropdown-item" href="sub-bakery.php">Bakery</a>
              </div>
            </li>
              <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
              
              <li class="nav-item cta cta-colored"><a href="./carrito.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
              <li class="nav-item"><a href="../php/destroy.php" class="nav-link">Cerrar Sesion</a></li>
            </ul>
          </div>
        </div>
      </nav>';

        echo "<section>";
     
        } else{
            ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">HOMARKET</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="sub-electro.php">Home appliances</a>
                <a class="dropdown-item" href="sub-bebe.php">Babies</a>
                <a class="dropdown-item" href="sub-electronicos.php">Electronic</a>
                <a class="dropdown-item" href="sub-salud.php">Health</a>
                <a class="dropdown-item" href="sub-juegos.php">Toys</a>
                <a class="dropdown-item" href="carnes.php">Meats</a>
                <a class="dropdown-item" href="sub-bebidas.php">Drinks</a>
                <a class="dropdown-item" href="sub-limpieza.php">Cleaning and home</a>
                <a class="dropdown-item" href="sub-escuela.php">School zone</a>
                <a class="dropdown-item" href="sub-bakery.php">Bakery</a>
              </div>
            </li>
              <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
              

            </ul>
          </div>
        </div>
      </nav>
             <section class="sesion">
            <a id="glogin" href="login.php"><input type="button" class="cuenta" value="Iniciar Sesion" src="login.php"/></a>
            <a id="glogin2 " href="inicio_sesion.php"><input type="button" class="cuenta" value="Crear Cuenta" src="inicio_sesion.php"/></a>
        </section>
        <br>

        <?php
        }
         ?>
    <!-- END nav -->
            
        <br>
    <section id="home-section" class="hero">
      <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(../images/bg_1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">Las mas frescas frutas &amp; Verduras</h1>
                <h2 class="subheading mb-4">Entregamos frutas &amp; verduras 100% organicas</h2>
                <p><a href="#" class="btn btn-primary">Ver a detalle</a></p>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(../images/kitchen.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">Electrodomesticos que embellecen tu hogar</h1>
                <h2 class="subheading mb-4">Lo mejor en diseño &amp; materiales</h2>
                <p><a href="#" class="btn btn-primary">Ver a detalle</a></p>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(../images/bake.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">Lo mejor del bakery lo encuentras aquí</h1>
                <h2 class="subheading mb-4">Listo para disfrutar</h2>
                <p><a href="#" class="btn btn-primary">Ver a detalle</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Envio gratis</h3>
                <span>ordenes superiores a $100</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Siempre fresco</h3>
                <span>Productos bien empaquetados</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Calidad superior</h3>
                <span>calidad de producto</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Soporte</h3>
                <span>Soporte 24/7</span>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Categorías</h2>
            <p>Gran variedad solo en HOMARKET</p>
          </div>
        </div>      
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/elec.png" alt="Colorlib Template">
                
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center ">
                <h3 ><a href="#">Electrodomesticos</a></h3>


              </div>
            </div>
          </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/be.png" alt="Colorlib Template">
                
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center ">
                <h3 ><a href="#">Bebes</a></h3>


              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/electr.png" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Electronicos</a></h3>
                <div class="d-flex">

                </div>

              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/jara.jpg" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Salud</a></h3>
                <div class="d-flex">
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/jug.jpg" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Juguetes</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/carne.jpg" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Carnes</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/fr.gif" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Frutas y verduras</a></h3>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/bebi.jpg" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bebidas</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/limpi.jpg" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Limpieza y hogar</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/esco.jpg" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Escolar</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="../images/pan.jpg" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bakery</a></h3>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    
    <section class="ftco-section img" style="background-image: url(../images/bg_3.jpg);">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <span class="subheading">Mejores precios para ti</span>
            <h2 class="mb-4">Oferta del día</h2>
            <p>Todo alimento color verde cuenta con 15% de descuento</p>
            <h3><a href="#">Pepino</a></h3>
            <span class="price">$1 <a href="#"> ahora $0.85</a></span>
          </div>
        </div>      
      </div>
    </section>



    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
            <span>Recibe e-mails sobre nuestras ultimas ofertas</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Ingrese su e-mail">
                <input type="submit" value="Suscribete" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
            </a>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Homarket</h2>
              <p>El supermercado en tu hogar; contamos con lo mejor de lo mejor desde aparatos electronicos hasta alimenticios.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ayuda</h2>
              <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li><a href="#" class="py-2 d-block">Terminos &amp; Condiciones</a></li>
                  <li><a href="#" class="py-2 d-block">Politicas de privacidad</a></li>
                </ul>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Preguntas frecuentes</a></li>
                  <li><a href="#" class="py-2 d-block">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">¿Tienes Preguntas?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Paseo Gral. Escalón 3700, San Salvador</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+503 2265 6360</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">homemarket@market.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="icon-heart color-danger" aria-hidden="true"></i> by <a target="_blank">HOMARKET</a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>