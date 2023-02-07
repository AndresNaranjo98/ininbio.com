<?php

session_start();
if (isset($_SESSION['rol'])) {
  switch ($_SESSION['rol']) {
    case 1:
      // header('location: index.php');
?>
      <script>
        window.onload = function() {
          what();

          function what() {
            document.getElementById('loginRegister').innerHTML = '<li id="loginRegister" class="rd-nav-item"><a class="rd-nav-link" href="#"><span class="icon novi-icon icon-md mdi mdi-logout"></span></a></li>';
          };
        }
      </script>
    <?php
      break;
    case 2:
      // header('location: index.php');
    ?>
      <script>
        window.onload = function() {
          what();

          function what() {
            document.getElementById('loginRegister').innerHTML = '<li id="loginRegister" class="rd-nav-item rd-nav-link" style="color : white" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="icon novi-icon icon-md mdi mdi-logout"></span></li>';
          };
        }
      </script>
<?php
      break;
    default:
  }
}

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Ininbio/Diagnósticos Gratuitos</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-logo"><img src="images/main-logo.png" alt="" width="200" height="150" srcset="images/main-logo.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header--><a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank">
        <!-- <img src="images/intense_02.jpg" alt=""/> -->
      </a>
      <header class="section novi-background page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/main-logo.png" alt="" width="200" height="150" srcset="images/main-logo.png 2x"/></a>
                </div>
                <div class="rd-navbar-collapse">
                  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                  <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                      <div class="unit-body">
                        <ul class="list-0">
                          <li><a class="link-default" href="tel:#">+55 (352) 522-7560</a></li>
                          <li><a class="link-default" href="tel:#">+55 (352) 522-7561</a></li>
                        </ul>
                      </div>
                    </article>
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="link-default" href="https://goo.gl/maps/stCLzY3ohG2hGx6Z6">Aldama No. 45 Col. Centro C.P. 59300, <br> La Piedad, Michoacán, México</a></div>
                    </article>
                    <!-- <a class="button button-gray-bordered button-winona" href="#">Request a call</a> -->
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-email"></span></div>
                      <div class="unit-body"><a class="link-default" href="tel:#">contacto@ininbio.com</a></div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer" style="text-align: center;">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">

                <ul class="rd-navbar-nav menu-horizontal">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="rd-nav-item">
                    <p class="rd-nav-link" style="cursor: pointer;">Acerca de Nosotros</p>
                    <ul class="menu-vertical">
                      <li><a class="rd-nav-link" href="about-us.php">¿Quiénes Somos?</a></li>
                      <li><a class="rd-nav-link" href="certificaciones.php">Certificaciones</a></li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="diagnosticos.php">Diagnósticos Gratuitos</a></li>
                      <li><a class="rd-nav-link" href="investigaciones.php">Investigaciones</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="typography.php">Productos</a>
                    <ul class="menu-vertical">
                      <li><a class="rd-nav-link" href="levaduras.php">Levaduras</a></li>
                      <li><a class="rd-nav-link" href="nutrientes.php">Nutrientes</a></li>
                      <li><a class="rd-nav-link" href="antiespumantes.php">Antiespumantes</a></li>
                      <li><a class="rd-nav-link" href="antiadherentes.php">Antiadherentes</a></li>
                    </ul>
                  </li>
                  <li id="loginRegister" class="rd-nav-item"><a class="rd-nav-link" href="login.php"><span class="icon novi-icon icon-md mdi mdi-account"></span></a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="carrito.php"><span class="icon novi-icon icon-sm mdi mdi-cart"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          </nav>
        </div>
      </header>

      <!-- Working at CaseCraft-->
      <section class="section novi-background section-xl" style="margin-top: 30px;">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="text-uppercase">Servicio de análisis in SITU.</h3>
              <br>
              <p>Nuestro equipo técnico y científico hace análisis a sus procesos de fermentación 
                para lograr un diagnóstico sobre la eficiencia del proceso y las sugerencias para obtener mejores resultados.</p>

                <p>•Análisis de PH.</p>
                <p>•Análisis de temperatura.</p>
                <p>•Análisis de población.</p>
                <p>•Análisis de viabilidad.</p>
                <p>•Caracterización morfológica</p>
                <p>•Análisis de °BRIX.</p>
                <p>•Análisis de Riqueza Alcohólica</p>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-6"><img class="img-responsive" src="images/Cofepris.png" alt="" width="570" height="388"/>
          </div>
        </div>
      </section>
      <div class="container">
        <hr/>
      </div>
      <section class="section novi-background section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <!-- <h3 class="text-uppercase">REGISTRO COFEPRIS</h3> -->

              <br>
              <h3 class="text-uppercase">Desarrollo de nutrientes específicos</h3>
              <p>ININBIO desarrolla fórmulas para los procesos de fermentación específicos mencionados en nuestro catálogo,
                 pero a veces desarrolla fórmulas muy específicas en algunos clientes porque sus procesos son especiales con requisitos nutricionales muy específicos.</p>
                <!-- <a class="button button-lg button-primary button-winona" href="about-us.html">View properties</a> -->
            </div>
            <div class="col-md-10 col-lg-6 col-xl-6"><img class="img-responsive" src="images/Cofepris.png" alt="" width="570" height="388"/>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <hr/>
      </div>
      <section class="section novi-background section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <!-- <h3 class="text-uppercase">REGISTRO COFEPRIS</h3> -->

              <br>
              <h3 class="text-uppercase">Aislamiento y selección de cepas</h3>
              <p>En ININBIO, la selección y el aislamiento de las cepas se realizaron con el objetivo de encontrar levaduras con características de gran interés para
                 la fermentación alcohólica, destinadas a la fabricación de bebidas alcohólicas, o para lograr la diferenciación de cepas de levaduras que tengan un gran
                valor industrial ya conocido.</p>
                <!-- <a class="button button-lg button-primary button-winona" href="about-us.html">View properties</a> -->
            </div>
            <div class="col-md-10 col-lg-6 col-xl-6"><img class="img-responsive" src="images/Cofepris.png" alt="" width="570" height="388"/>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <hr/>
      </div>
      <section class="section novi-background section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <!-- <h3 class="text-uppercase">REGISTRO COFEPRIS</h3> -->

              <br>
              <h3 class="text-uppercase">Trabajos de propagación de cepas de levadura</h3>
              <p>Dentro de nuestros servicios se encuentra la asesoría para hacer más eficiente la propagación y contar con mejores técnicas de reproducción celular.</p>
                <!-- <a class="button button-lg button-primary button-winona" href="about-us.html">View properties</a> -->
            </div>
            <div class="col-md-10 col-lg-6 col-xl-6"><img class="img-responsive" src="images/Cofepris.png" alt="" width="570" height="388"/>
            </div>
          </div>
        </div>
      </section>
            </div>
          </div>
        </div>
      </section> 
      <footer class="section novi-background footer-advanced bg-gray-700">
        <div class="footer-advanced-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Acerca de Nosotros</h5>
                <p class="footer-advanced-text">
                  ININBIO, surge de la necesidad de satisfacer la demanda del sector de las bebidad alcohólicas que busca nutrientes, levaduras e insumos para sus fermentaciones de la más alta calidad y con innovaciones en cuanto a desarrollo de fórmulas novedosas de acuerdo a sus necesidades.
                </p>
              </div>
              <div class="col-sm-7 col-md-5 col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Recent Blog Posts</h5>
                <!-- Post Inline-->
                <article class="post-inline">
                  <p class="post-inline-title"><a href="#">Real Estate Guide: 7 Important Tips for Buying a Home</a></p>
                  <ul class="post-inline-meta">
                    <li>by Mike Barnes</li>
                    <li><a href="#">2 days ago</a></li>
                  </ul>
                </article>
                <!-- Post Inline-->
                <article class="post-inline">
                  <p class="post-inline-title"><a href="#">Single-Family Homes as a Housing Option for Young Families</a></p>
                  <ul class="post-inline-meta"> 
                    <li>by Mike Barnes</li>
                    <li><a href="#">2 days ago</a></li>
                  </ul>
                </article>
              </div>
              <div class="col-sm-5 col-md-7 col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Gallery</h5>
                <div class="row row-x-10" data-lightgallery="group">
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/di-phosta.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/di-phosta.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/nutri-fast.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/nutri-fast.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/nutri-ferm.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/nutri-ferm.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/vinimax.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/vinimax.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/urea.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/urea.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/ron.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/ron.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/leva.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/leva.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/antiespumante.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/antiespumante.png" alt=""/>
                      <div class="thumbnail-minimal-caption"> </div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout">
              <div class="list-nav">
              <p class="icon novi-icon icon-sm link-default fa-brands fa-clock"> Horario</p>
              <p>Lunes a Viernes de 8:00 am. a 6:00 pm.</p>
            </div>
              <!-- <div>
                <ul class="list-nav"> 
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="about-us.html">Nosotros</a></li>
                  <li><a href="typography.php">Productos y Servicios</a></li>
                </ul>
              </div> -->
              <div>
                <ul class="foter-social-links list-inline list-inline-md">
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-facebook" href="https://www.facebook.com/ininbio"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-instagram" href="https://www.instagram.com/grupo_ininbio/"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-tiktok" href="https://www.tiktok.com/@ininbio_channel"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-youtube" href="https://www.youtube.com/watch?v=k3uHN6LZpg8"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-whatsapp" href="https:\/\/api.whatsapp.com/send?phone=5213521429098"></a></li>
                  <!-- <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li> -->
                  <!-- <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout"><a class="brand" href="index.html"><img src="images/main-logo.png" alt="" width="115" height="34" srcset="images/main-logo.png 2x"/></a>
              <!-- Rights-->
              <p class="rights"><span style="color: #71c500;">&copy;&nbsp;</span><span class="copyright-year"></span></p>
              <p class="rights" style="color: #2c9182;">www.ininbio.com</p>
            </div>
          </div>
        </div>

        <!-- <div class="card" style="--i:url(img1.jpg)">
          <div class="content">
            <i class="fa-sharp fa-solid fa-house"></i>
              <a href="#">Ver Detalles</a>
          </div>
      </div> -->
      </footer>
    </div>


    <div class="modal fade bd-example-modal-sm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cerrar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <div class="cerrar" aria-hidden="true">&times;</div>
          </button>
        </div>
        <div class="modal-body" style="text-align: center; color: black;">
          ¿Seguro que quieres finalizar tu sesión?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #71c500; color: white;">No</button>
          <button id="cerrar" type="button" class="btn" style="text-transform: none; background-color: #2d9082; color: white;">Sí, cerrar sesión</button>
        </div>
      </div>
    </div>
  </div>


<script>
    document.getElementById("cerrar").onclick = function() {
      location.href = 'cerrarSesion.php?logout=true';
      localStorage.clear();
    }
  </script>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js\contador.js"></script>


<link rel="stylesheet" href="css\whats.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<link rel="stylesheet" href="css\whats2.css">
<div class="nav-bottom">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
          <div class="popup-whatsapp fadeIn">
              <div class="content-whatsapp -top"><button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">close</i>
                  </button> 
                
                 <p>  <img src="images\secretary.png" width="50">  Hola, ¿en que podemos ayudarle? </p>
                 
              </div>
              <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
                 
                 
                
        
                  <button class="send-msPopup" id="send-btn" type="button">
                      <i class="material-icons icon-font-color--black">send</i>
                  </button>

              </div>
          </div>
          <button type="button" id="whats-openPopup" class="whatsapp-button">
              <div class="float" >
<i class="fa fa-whatsapp my-float"></i></div>
          </button>
          <div class="circle-anime"></div>
      </div>
      <script  src="js\script2.js"></script>
  </body>
</html>