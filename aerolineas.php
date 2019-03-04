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
    <link rel="stylesheet" href="css/estilo-propio.css">
</head>
<body>
<!--page wrapper-->
<main id="wrapper" class="d-flex flex-column">
  <!--[1] Header-->
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
              <a class="navbar-brand d-flex align-items-center" href="index.php">
                  <img src="imagenes/inmobiliaria.png" class="img-fluid" alt="">
              </a>
              <button type="button" class="btn btn-md btn-primary rounded bonton-estilo " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Contáctanos</button>
              <button class="navbar-toggler font-weight-light"   type="button" data-toggle="collapse" data-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse navbar-right justify-content-end " id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link font-weight-medium" href="index.php">Inició</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link font-weight-medium" href="#informate">Infórmate</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link font-weight-medium" href="tel:+56981373858"> <i class="fa fa-phone"></i> LLámanos</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>
  <!--[2] Breadcrumbs-->
<section id="breadcrumbs" style="background-image: url(imagenes/avion3.jpg)">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-white font-weight-bold text-center mb-1">¿Tuviste algún problema con Aerolíneas <br>
          o Agencias de viajes?</h1><br>
          <button type="button" class="btn btn-lg btn-primary rounded font-weight-light bonton-estilo-4" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Contáctanos</button>
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
                  <input type="text" id="nombre" name="nombre" class="form-control" required="required" placeholder="Nombre">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" id="telefono" name="telefono" class="form-control" required="required" placeholder="Telefono">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" id="subject" name="subject" class="form-control" required="required" placeholder="Asunto">
                </div>
              </div>
              <div class="form-group">
                <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8" placeholder="Cuentanos tu experiencia"></textarea>
              </div>
              <div class="form-group d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-lg bonton-estilo-3 rounded " data-dismiss="modal">Cerrar</button>
                <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg bonton-estilo-3 rounded" value="Enviar" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
    <!--[3] FAQ-->
    <a name="informate"></a>
<section id="faq">
    <div class="container">
      <h1 class="section-title text-center font-weight-normal"><span
            > Infórmate</span></h1>
        <div class="row text-center">
          <div class="col-md-1">
          </div>
            <div class="col-12 col-sm-12 col-md-12 col-md-offset-1 col-lg-10 col-xl-10">
                <div id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header card-header-propio-landing " role="tab" id="headingOne">
                            <h6 class="mb-0 text-center">
                                <a data-toggle="collapse" href="#collapse1"
                                    class="btn-accord">
                                    1.- ¿Cuáles son las obligaciones de las Aerolíneas, Agencias de viajes y de Transporte de pasajeros?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse1" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <p class="mb-0">
                                    Las aerolíneas y Agencias de viajes, tanto nacionales como extranjeras,
                                    deben cumplir con las obligaciones le impone la Ley y los contratos celebrados con los pasajeros.
                                    <br>
                                    NO pueden obligarte a viajar en condiciones diferentes a las ofrecidas al momento de contratar el servicio.
                                    <br>
                                    La publicidad debe ser verdadera, comprobable y nunca inducir a error o engaño a los consumidores.<br>
                                    Las empresas tiene la obligación de transparentar los costos finales incluyendo tasas de embarques y otros impuestos.<br>
                                    El precio ofrecido debe respetarse, las empresas no pueden cobrar ni un peso más.

                                    <br>
                                    Recuerda que las empresas de aerolíneas y viajes tienen la obligación de cumplir con:
                                    <br>
                                     -	El horario y fecha indicado en el pasaje.<br>
                                     - 	Las condiciones establecidas en el contrato.<br>
                                     -	No cobrar sobre lo indicado en la publicidad o contrato.<br>
                                     -	Cuidar que no se produzcan situaciones de violencia o discriminación de su personal o de terceros durante el servicio.<br>
                                     -	Velar por la seguridad del viaje en todo momento.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-propio-landing" role="tab" id="headingTwo">
                            <h6 class="mb-0">
                                <a class="collapsed btn-accord" data-toggle="collapse"
                                   href="#collapse2"
                                   aria-expanded="false" >
                                    2.- ¿Qué puedo hacer si fueron vulnerados mis derechos como consumidor?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse2" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <h6 class="mb-0">
                                  Tienes que distinguir en base a la naturaleza y monto de los perjuicios ocasionados como causa de la infracción
                                  del proveedor a la Ley del Consumidor, pudiendo Reclamar mediante el SERNAC o a través de un abogado,
                                  la diferencia principal es que a través de un defensor privado puedes solicitar, negociar y obtener una
                                  indemnización monetaria por los los perjuicios ocasionados; además de una multa al proveedor del servicio que
                                  pasó a llevar tus derechos.
                                </h6>.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-propio-landing" role="tab" id="headingThree">
                            <h6 class="mb-0">
                                <a class="collapsed btn-accord" data-toggle="collapse"
                                   href="#collapse3"
                                   aria-expanded="false" >
                                    3.- ¿Cual es el plazo que tengo para reclamar?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse3" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <h6 class="mb-0">
                                  El plazo para denunciar y demandar a una empresa en el Juzgado de Policía Local por infracción a los derechos del
                                  consumidor es de 6 meses a contar de la infracción. Vencido dicho plazo se puede recurrir a la justicia ordinaria
                                  en un plazo que puede ser hasta 5 años desde que se generó el incumplimiento, llegando en algunos casos hasta 10 años.
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-propio-landing" role="tab" id="headingFour">
                            <h6 class="mb-0">
                                <a class="collapsed btn-accord" data-toggle="collapse"
                                   href="#collapse4"
                                   aria-expanded="false">
                                    4.-	¿Qué documentos necesito para iniciar una acción judicial?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse4" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <h6 class="mb-0">
                                  Lo más importante es guardar los antecedentes relacionados con el caso y que sirven para probar tus afirmaciones:<br>
                                  El contrato celebrado, la boleta de servicios, alguna grabación de whatsapp, foto, video, testigos del hecho,
                                  constatar lesiones, correos electrónicos; todo puede servir de base para probar el incumplimiento del proveedor
                                  se servicios.
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-propio-landing" role="tab" id="headingFive">
                            <h6 class="mb-0">
                                <a class="collapsed btn-accord" data-toggle="collapse"
                                   href="#collapse5"
                                   aria-expanded="false">
                                    5.-	¿Qué beneficios puedo obtener con la ayuda de reclamarsirve? ¿Cuál es la diferencia con acudir al Servicio Nacional del Consumidor (SERNAC)?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse5" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <h6 class="mb-0">
                                  Nuestros servicios nacen como una ayuda a todas las personas que vieron vulnerados sus derechos como consumidor,
                                  fueron discriminados o pasados a llevar,  somos una opción y una herramienta para hacer valer tus derechos.
                                  Siendo representado por un abogado en reclamarsirve, puedes no solo solicitar una multa en contra de la empresa
                                  infractora, sino que también negociar una indemnización monetaria a tu favor por los perjuicios ocasionados.
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-propio-landing" role="tab" id="headingFive">
                            <h6 class="mb-0">
                                <a class="collapsed btn-accord" data-toggle="collapse"
                                   href="#collapse6"
                                   aria-expanded="false">
                                    6.- 	¿Qué se entiende por perjuicios en este tipo de casos?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse6" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <h6 class="mb-0">
                                  Los perjuicios abarcan desde lo pagado por el servicio o producto, hasta una indemnización por
                                  el daño moral que te produjo la infracción a la Ley del Consumidor
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-propio-landing" role="tab" id="headingFive">
                            <h6 class="mb-0">
                                <a class="collapsed btn-accord" data-toggle="collapse"
                                   href="#collapse7"
                                   aria-expanded="false">
                                    7.-	¿Dónde puedo saber sobre mis derechos como consumidor?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse7" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <h6 class="mb-0">
                                  <a href="https://www.sernac.cl/portal/607/w3-propertyname-596.html">
                                    7.-	Revisa aquí cuáles son tus derechos como consumidor.</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-propio-landing" role="tab" id="headingFive">
                            <h6 class="mb-0">
                                <a class="collapsed btn-accord" data-toggle="collapse"
                                   href="#collapse8"
                                   aria-expanded="false">
                                    8.-	¿Existen casos similares al mío?
                                </a>
                            </h6>
                        </div>
                        <div id="collapse8" class="collapse" role="tabpanel"
                             data-parent="#accordion">
                            <div class="card-body">
                                <h6 class="mb-0">
                                  <a href="https://www.instagram.com/p/BtRh5jKhOc8/?utm_source=ig_web_copy_link">Caso 1: Cancelación del vuelo</a>
                                  <a href="https://www.instagram.com/p/BstZh-ogk8O/?utm_source=ig_web_copy_link"><br>Caso 2: Luna de miel</a>
                                  <a href="https://www.instagram.com/p/BstcCYYgGU0/?utm_source=ig_web_copy_link"><br>Caso 3: Seguridad en la prestación del servicio (quemaduras)</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--[16] Footer-->
    <footer>
        <div class="container">
            <div class="row widget-row float-center">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <h5 class="footer-title-widget font-weight-bold text-white text-uppercase mb-3">Reclama<span> ahora</span>
                    </h5>
                    <p class="footer-subtitle-widget mb-3">Creemos comunidad. <br>Basta de abusos,
                       ya llegó la hora de que los consumidores hagan valer sus derechos.</p>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <h5 class="footer-title-widget font-weight-bold text-white text-uppercase mb-3">Encuéntranos
                        <span> en</span></h5>
                    <div class="contact-widget">
                        <div class="info-contact d-flex mb-2">
                            <div><i class="fa fa-map-marker"></i></div>
                            <p class="mb-0"><a href="https://www.google.com/maps/place/Av.+Sta.+Rosa+17,+Santiago,+Regi%C3%B3n+Metropolitana/@-33.4433708,-70.6484697,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c5a03b3b47a9:0xbea5ff09cdc35a17!8m2!3d-33.4433708!4d-70.646281">Avenida Santa Rosa 17,  oficina 41.</a></p>
                        </div>
                        <div class="info-contact d-flex mb-2">
                            <div><i class="fa fa-phone"></i></div>
                            <a href="tel:+56981373858" class="mb-0">Llámanos</a>
                        </div>
                        <div class="info-contact d-flex mb-2">
                            <div><i class="fa fa-envelope"></i></div>
                            <p class="mb-0"><a href="mailto:reclamarsirve@gmail.com">reclamarsirve@gmail.com</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <h5 class="footer-title-widget font-weight-bold text-white text-uppercase mb-3">Síguenos
                        <span> En</span></h5>
                    <div class="contact-widget">
                        <div class="d-flex mb-3 social-box">
                            <div class="mr-2">
                                <a href="https://www.instagram.com/reclamarsirve/"><i class="fab fa-instagram icon-footer-bottom" style="font-size: 2rem;"></i></a>
                            </div>
                            <div class="mr-2">
                                <a href="https://www.facebook.com/Reclamar-sirve-342462676341010/"><i class="fa fa-facebook icon-footer-bottom" style="font-size: 2rem;"></i></a>
                            </div>
                            <div class="mr-2">
                                <a href="https://twitter.com/reclamarsirve"><i class="fa fa-twitter icon-footer-bottom" style="font-size: 2rem;"></i></a>
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
<!--particles config-->
<script src="js/particle-config.js"></script>
<!--bootstrap.js-->
<script src="js/bootstrap.js"></script>
<!--custom js-file-->
<script src="js/main.js"></script>
<!--  mi js-->
<script src="js/myjs.js"></script>
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5511091.js"></script>
<!-- End of HubSpot Embed Code -->

</body>
</html>
