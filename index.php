<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Reclamar Sirve</title>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="description" content="html template">
    <meta name="author" content="JD-Themes">
    <!--color theme of the status-bar (Chrome, Firefox OS and Opera)-->
    <meta name="theme-color" content="#0288d1">
    <!--iOS safari status-bar-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent">
    <!--windows phone status-bar-->
    <meta name="msapplication-navbutton-color" content="#0288d1">
    <meta name="msapplication-TileColor" content="#0288d1">
    <meta name="msapplication-TileImage" content="img/favicon.ico">
    <!--favicon-->
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
    <link rel="SHORTCUT ICON" type="image/x-icon" href="img/favicon.ico">
    <!--page title-->
    <title>Strict</title>
    <!--сonnecting css files-->
    <!--font-awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--owl-carousel-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!--owl-theme-->
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!--core(bootstrap)-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--main css(custom)-->
    <link rel="stylesheet" href="css/main.css">
    <!-- my design -->
    <link rel="stylesheet" href="css/mydesign.css">
</head>
<body>
<!--page wrapper-->
<main id="wrapper" class="d-flex flex-column">
    <!--[1] Header-->
    <header>
        <div class="top-bar">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="social-box">
                    <a href="https://www.instagram.com/reclamarsirve/"><i class="fab fa-instagram icon-top-bottom" style="font-size: 2rem;"></i></a>
                    <a href="https://www.facebook.com/Reclamar-sirve-342462676341010/"><i class="fa fa-facebook icon-top-bottom" style="font-size: 2rem;"></i></a>
                    <a href="https://twitter.com/reclamarsirve"><i class="fa fa-twitter icon-top-bottom" style="font-size: 2rem;"></i></a>
                    <a href="tel:+56981373858" class="mr-4"> <i class="fa fa-phone icon-top-bottom" style="font-size: 2rem;"></i></a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container ">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="http://via.placeholder.com/100x50" class="img-fluid" alt="">
                </a>
                <button type="button" style="margin:1.2vh 0 1.2vh 0;" class="btn btn-md btn-primary rounded bonton-estilo " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Contactanos</button>
                <button class="navbar-toggler font-weight-light"   type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse navbar-right justify-content-end " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" href="#informate">Infórmate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--[2] Breadcrumbs-->
  <section>
    <div class="jumbotron portada-general">
      <div class="row" id="" >
        <div class="col-lg-6 texto-portada">
          <h1 class="text-center mb-1 font-weight-light ">Servicio jurídico de confianza</h1><br>
            <div class=" col-lg-10 container d-flex flex-column justify-content-center align-items-center">
              <h3 class="text-center mb-1 font-weight-light">
                    Expertos en exigir tus derecho como consumidor. </h3>
                    <p class="text-center mb-1 font-weight-light">
                      Consulta gratuitamente  con un abogado.</p>
                  <button type="button" class="btn btn-lg btn-primary rounded font-weight-light bonton-estilo" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Contactanos</button>
            </div>
        </div>

        <div class="col-lg-6 foto-portada">
          <img src="imagenes/abogado-sin-fondo.png" class="img-fluid" alt="" style="width:100%;">
        </div>
    </div>
    </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confía en nosotros.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body text-blue" >
          <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="enviar.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required="required" placeholder="Pedro">
              </div>
              <div class="form-group col-md-6">
                <label >Email</label>
                <input type="email" id="email" name="email" class="form-control" required="required" placeholder="pedroperez@gmail.com">
              </div>
              <div class="form-group col-md-6">
                <label >Telefono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" required="required" placeholder="+56 9 777687792">
              </div>
              <div class="form-group col-md-6">
                <label >Asunto</label>
                <input type="text" id="subject" name="subject" class="form-control" required="required" placeholder="Agencia de viajes">
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label">Cúentanos tu caso.</label>
              <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8" placeholder="Cuentanos tu experiencia"></textarea>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" value="enviar" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </section>
    <a name="servicios"></a>
    <section id="services">
        <div class="container">
          <h1 class="section-title text-center font-weight-normal"><span
                > ¿Tuviste problemas con alguno de estos servicios?</span></h1>
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service">
                      <a href="aereolineas.html">
                        <div class="header-service d-flex align-items-center">
                          <i class="fas fa-plane"></i>
                          <h5 class="mb-0 ml-2">Aereolineas y Agencias de viajes</h5>

                        </div>
                        <div class="anim-bar"></div>
                      </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service" >
                        <div class="header-service d-flex align-items-center">
                            <i class="fas fa-hotel"></i>
                            <h5 class="mb-0 ml-2">Hoteles, Resort y Turismo</h5>
                            <p class="invisibles">a</p>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service" >
                        <div class="header-service d-flex align-items-center">
                          <i class="fas fa-ambulance"></i>
                          <h5 class="mb-0 ml-2"> Clínicas y Hospitales</h5>
                          <p class="invisibles">a</p>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service" >
                        <div class="header-service d-flex align-items-center">
                            <i class="fas fa-clinic-medical"></i>
                            <h5 class="mb-0 ml-2">Isapres</h5>
                            <p class="invisibles">a</p>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service" >
                        <div class="header-service d-flex align-items-center">
                            <i class="fa fa-credit-card"></i>
                            <h5 class="mb-0 ml-2">Banco y TC</h5>
                            <p class="invisibles">a</p>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service" >
                        <div class="header-service d-flex align-items-center">
                          <i class="fas fa-music"></i>
                            <h5 class="mb-0 ml-2">Eventos masivos y fiestas</h5>
                            <p class="invisibles">a</p>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service">
                        <div class="header-service d-flex align-items-center">
                            <i class="fas fa-building"></i>
                            <h5 class="mb-0 ml-2">Inmobiliarias</h5>
                            <p class="invisibles">a</p>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service" >
                        <div class="header-service d-flex align-items-center">
                            <i class="fa fa-cart-arrow-down"></i>
                            <h5 class="mb-0 ml-2">Compras Online</h5>
                            <h5 class="invisibles">a</h5>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                    <div class="service">
                        <div class="header-service d-flex align-items-center">
                            <i class="fas fa-donate"></i>
                            <h5 class="mb-0 ml-2">Otros Productos y Servicios</h5>
                            <h5 class="invisibles">a</h5>
                        </div>
                        <div class="anim-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--[3] Welcome Section-->
    <a name="informate"></a>
    <section id="welcome-section">
        <div class="container">
            <h2 class="section-title text-center font-weight-bold ">Informate sobre tus<span
                    class="font-weight-black"> derechos</span></h2>
            <div class="row">
                <div class="col-xl img-col"><img src="imagenes/img_home_derechos.jpg" class="img-fluid" alt=""></div>
                <div class="col-xl info-col">
                    <h5 class="mb-3">La ley de proteccion al consumidor establece una serie de herramientas con el fin de repara el daño causado por un mal servicio o producto.</h5>
                    <p class="mb-3 text-info-col">Como consumidor puedes solicitar el cobro de una multa al proveedor mas una indemnizacion por
                       los perjuicios ocasionados a tu persona o familiares.
                    </p>
                    <p class="mb-3 text-info-col">Como consumidor tiene los siguientes derechos:
                    </p>
                    <div class="d-flex align-items-center service mb-2">
                        <i class="fa fa-check-circle-o"></i>
                        <p class=" link mb-0 font-weight-medium">  Derecho a que las empresas NO cambien las condiciones o costos del contrato si no estas de acuerdo.</p>
                    </div>
                    <div class="d-flex align-items-center service mb-2">
                        <i class="fa fa-check-circle-o"></i>
                        <p class="mb-0 font-weight-medium">Derecho a la reparación e indemnización por el daño causado</p>
                    </div>
                    <div class="d-flex align-items-center service mb-2">
                        <i class="fa fa-check-circle-o"></i>
                        <p class="mb-0 font-weight-medium">Derecho a solicitar una multa en contra de la empresa que prestó el servicio de forma deficiente</p>
                    </div>
                    <div class="d-flex align-items-center service mb-2">
                        <i class="fa fa-check-circle-o"></i>
                        <p class="mb-0 font-weight-medium">Derecho a garantía, cambio, devolución o reparación por el producto o servicio.</p>
                    </div>
                    <div class="d-flex align-items-center service mb-2">
                        <i class="fa fa-check-circle-o"></i>
                        <p class="mb-0 font-weight-medium">Derecho a la SEGURIDAD en el consumo de bienes y servicios: SIN AGRESIONES NI OFENSAS NI INTIMIDACIONES</p>
                    </div>
                    <div class="d-flex align-items-center service mb-2">
                        <i class="fa fa-check-circle-o"></i>
                        <p class="mb-0 font-weight-medium">HAZ RESPETAR TUS DERECHOS/p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sections contacto -->
    <section id="contact-mini" class="seccion-contacto">
        <div class="container-fluid">
            <div class="row">
              <a name="contactanos"></a>
                <div class="col-md" style="background: url(imagenes/contacto3.jpg); color:white !important;">
                  <div class="row justify-content-center">
                    <div class="contact-box col-md-7">
                        <h2 class="section-title font-weight-bold mb-1 color-white text-center">Estamos aquí para ayudarte<span
                                class="font-weight-black color-white"> contáctanos</span></h2>
                        <p class="mb-4 color-white text-center">Es tiempo que conozcas tus derechos y los exijas.</p>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="enviar.php" >
                            <div class="row-input d-flex transparente color-white">
                              <input type="text" id="nombre" name="nombre" class="form-control first-item" required="required" placeholder="Nombre *">
                              <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Email *">
                            </div>
                            <div class="row-input d-flex transparente color-black">
                              <input type="text" id="telefono" name="telefono" class="form-control first-item" required="required" placeholder="Telefono">
                              <input type="text" id="subject" name="subject" class="form-control" required="required" placeholder="Asunto">
                            </div>
                            <div class=" transparente color-white">
                              <textarea name="mensaje" id="mensaje" required="required" class="form-control transparente" rows="8" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group text-center">
                                 <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg rounded bonton-estilo" value="enviar" />
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!--[16] Footer-->
    <footer>
        <div class="container">
            <div class="row widget-row">
                <div class="col-xl-4 col-md-4">
                    <h5 class="footer-title-widget font-weight-bold text-white text-uppercase mb-3">reclama<span>ahora</span>
                    </h5>
                    <p class="footer-subtitle-widget mb-3">BASTA DE ABUSOS</p>
                    <ol class="fast-links-widget pl-0">
                        <li class="mb-1 pb-1">
                            <a href="#contactanos">CONTACTANOS</a>
                        </li>
                    </ol>
                </div>

                <div class="col-xl-4 col-md-4 ">
                    <h5 class="footer-title-widget font-weight-bold text-white text-uppercase mb-3">Encuentranos
                        <span>en</span></h5>
                    <div class="contact-widget">
                        <p class="mb-3">Reclama ahora y recibe lo que corresponde.</p>
                        <div class="info-contact d-flex mb-2">
                            <div><i class="fa fa-map-marker"></i></div>
                            <p class="mb-0"><a href="https://www.google.com/maps/place/Hu%C3%A9rfanos+1147,+Santiago,+Regi%C3%B3n+Metropolitana/@-33.4396268,-70.6550505,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c5a4150b6b87:0x7a6c56bc373e0932!8m2!3d-33.4396268!4d-70.6528618">huerfanos</a></p>
                        </div>
                        <div class="info-contact d-flex mb-2">
                            <div><i class="fa fa-phone"></i></div>
                            <a href="tel:+56981373858" class="mb-0">+56981373858</a>
                        </div>
                        <div class="info-contact d-flex mb-2">
                            <div><i class="fa fa-envelope"></i></div>
                            <p class="mb-0"><a href="mailto:reclamarsirve@gmail.com">reclamarsirve@gmail.com</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 ">
                    <h5 class="footer-title-widget font-weight-bold text-white text-uppercase mb-3">Síguenos
                        <span>En</span></h5>
                    <div class="contact-widget">
                        <p class="mb-3">Creemos comunidad.<br>
                           Basta de abusos, ya llego la hora de que los consumidores hagan valer sus derechos.</p>
                        <div class="social-box d-flex mb-3">
                            <div class="mr-2">
                                <a href="https://www.instagram.com/reclamarsirve/" class="d-flex justify-content-center align-items-center"><i
                                        class="fa fa-instagram"></i></a>
                            </div>
                            <div class="mr-2">
                                <a href="https://www.facebook.com/Reclamar-sirve-342462676341010/" class="d-flex justify-content-center align-items-center"><i
                                        class="fa fa-facebook"></i></a>
                            </div>
                            <div class="mr-2">
                                <a href="https://twitter.com/reclamarsirve" class="d-flex justify-content-center align-items-center"><i
                                        class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
<!--connecting js files-->
<!--modernizr.js-->
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5511091.js"></script>
<!-- End of HubSpot Embed Code -->
<script src="js/modernizr-custom.js"></script>
<!--jQuery-->
<script src="js/jquery-3.2.1.min.js"></script>
<!--YTP player-->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!--countUp.js-->
<script src="js/countUp.min.js"></script>
<!--imageloaded.js-->
<script src="js/imageloaded.js"></script>
<!--waypoints.js-->
<script src="js/jquery.waypoints.min.js"></script>
<!--owl-carousel.js-->
<script src="js/owl.carousel.min.js"></script>
<!--parallax.js-->
<script src="js/parallax.js"></script>
<!--shuffle.js-->
<script src="js/jquery.shuffle.min.js"></script>
<!--particles.js-->
<script src="js/particles.min.js"></script>
<!--bootstrap.js-->
<script src="js/bootstrap.js"></script>
<!--custom js-file-->
<script src="js/main.js"></script>
</body>
</html>
