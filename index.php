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
  <title>Ininbio/Home</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css" id="main-styles-link">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>

  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <div class="preloader">
    <div class="preloader-logo"><img src="images/main-logo.png" alt="" width="200" height="150" srcset="images/main-logo.png 2x" />
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
                <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.php"><img src="images/main-logo.png" alt="" width="200" height="150" srcset="images/main-logo.png 2x" /></a>
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
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="rd-nav-item">
                    <p class="rd-nav-link" style="cursor: pointer;">Acerca de Nosotros</p>
                    <ul class="menu-vertical">
                      <li><a class="rd-nav-link" href="about-us.php">¿Quiénes Somos?</a></li>
                      <li><a class="rd-nav-link" href="certificaciones.php">Certificaciones</a></li>
                      <li><a class="rd-nav-link" href="diagnosticos.php">Diagnósticos Gratuitos</a></li>
                      <li><a class="rd-nav-link" href="investigaciones.php">Investigaciones</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item">
                    <p class="rd-nav-link" style="cursor: pointer;">Productos</p>
                    <ul class="menu-vertical">
                    <li><a class="rd-nav-link" href="typography.php">Productos y servicios</a></li>
                      <li><a class="rd-nav-link" href="levaduras.php">Levaduras</a></li>
                      <li><a class="rd-nav-link" href="nutrientes.php">Nutrientes</a></li>
                      <li><a class="rd-nav-link" href="antiespumantes.php">Antiespumantes</a></li>
                      <li><a class="rd-nav-link" href="antiadherentes.php">Antiadherentes</a></li>
                    </ul>
                  </li>
                  <li id="loginRegister" class="rd-nav-item"><a class="rd-nav-link" href="login.php"><span style="cursor: pointer;" class="icon novi-icon icon-md mdi mdi-account"></span></a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="carrito.php"><span class="icon novi-icon icon-sm mdi mdi-cart"></span></a>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>




    <section class="section swiper-container swiper-slider" data-loop="true" data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide_video" data-slide-bg="images/imagen-vino.jpg">
          <div class="container">
            <div class="jumbotron-classic-content">
              <div class="wow-outer">
                <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Nutrientes y Levaduras</div>
              </div>
              <h1 class="text-white font-weight-bold wow-outer"><span class="wow slideInUp" data-wow-delay=".2s">Propiedades:</span></h1>
              <br>
              <br>
              <!-- <p class="text-white wow-outer"> -->
              <ul class="text-white font-weight-bold wow-outer wow slideInDown">
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-target"></span>
                  <div style="margin-left: 5px;">Ajustables a su proceso de fermentación</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-target"></span>
                  <div style="margin-left: 5px;">Poseen actividad enzimática </div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-target"></span>
                  <div style="margin-left: 5px;">Productos con grado alimenticio</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-target"></span>
                  <div style="margin-left: 5px;">100% Mexicano</div>
                </li>
              </ul>
              <!-- </p> -->
              <!-- <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">View Properties</a></div> -->
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide_video" data-slide-bg="images/medalla.jpg">
          <div class="container">
            <div class="jumbotron-classic-content">
              <div class="wow-outer">
                <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInUp text-white">Logros y Certificados</div>
              </div>
              <br>
              <!-- <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Rent & Sale</span></h1> -->
              <ul class="text-white font-weight-bold wow-outer wow slideInDown">
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-trophy-award" style="color: gold;"></span>
                  <div style="margin-left: 5px;">Medalla de oro a la Calidad y Servicio</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-trophy-award" style="color: gold;"></span>
                  <div style="margin-left: 5px;">Productos con certificado KOSHER</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-trophy-award" style="color: gold;"></span>
                  <div style="margin-left: 5px;">Planta de producción con certificado FDA</div>
                </li>
                <!-- <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-target"></span><div style="margin-left: 5px;">100% Mexicano</div></li> -->
              </ul>
              <div class="wow-outer button-outer"><a class="button button-md button-primary wow slideInDown" href="certificaciones.php" data-wow-delay=".4s">Conoce más</a></div>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-slide-bg="images/estudios-gratuitos.jpg">
          <div class="container">
            <div class="jumbotron-classic-content">
              <div class="wow-outer">
                <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white" style="text-align: center;">Estudios para nuestros clientes</div>
              </div>
              <h1 class="text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Te ofrecemos:</span></h1>
              <br>
              <!-- <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Founded in 1989, our company is a team of renowned property management and real estate experts always ready to help you.</span></p> -->
              <ul class="text-white font-weight-bold wow-outer wow slideInDown">
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-eyedropper" style="color: #71c500;"></span>
                  <div style="margin-left: 5px;">Análisis In Situ</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-eyedropper" style="color: #71c500;"></span>
                  <div style="margin-left: 5px;">Aislamiento de selección de cepas</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-eyedropper" style="color: #71c500"></span>
                  <div style="margin-left: 5px;">Trabajos de propagación de cepas</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-eyedropper" style="color: #71c500;"></span>
                  <div style="margin-left: 5px;">Desarrollo de nutrientes específicos</div>
                </li>
                <li style="display: flex;"><span class="icon novi-icon icon-sm mdi mdi-eyedropper" style="color: #71c500;"></span>
                  <div style="margin-left: 5px;">Estudios de caracterización genética</div>
                </li>
                <div class="wow-outer button-outer"><a class="button button-md button-primary wow slideInDown" href="typography.php" data-wow-delay=".4s">Conoce más</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination-outer container">
        <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
      </div>
    </section>

    <?php

    include('./conexionBD/connection.php');
    require('vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $key_encrypt = $_ENV['KEY_ENCRYPT'];
    $method_encrypt = $_ENV['METHOD_ENCRYPT'];

    $consultaLogin = "SELECT * FROM productos ORDER BY rand() LIMIT 4;";
    $sentencia = $conn->prepare($consultaLogin);
    $sentencia->execute();
    $result = $sentencia->get_result();
    ?>

    <section class="section novi-background section-md text-center">
      <div class="container">
        <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Nuestros productos más vendidos</span></h3>
        <div class="row row-lg-50 row-35 offset-top-2">
        <?php
            $row = $result->fetch_all();
            for ($i = 0; $i < count($row); ++$i) {
              $idPro = $row[$i][0];
            ?>
          <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft" style="text-align: center;">
                <tr>
                  <div class="card" style="--i:url(../<?php echo $row[$i][6]; ?>)">
                    <div class="content">
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <form action="carrito.php" method="post">
                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($idPro, $method_encrypt, $key_encrypt); ?>">
                  <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($row[$i][6], $method_encrypt, $key_encrypt); ?>">
                  <input type="hidden" name="nombreProducto" id="nombreProducto" value="<?php echo openssl_encrypt($row[$i][1], $method_encrypt, $key_encrypt); ?>">
                  <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($row[$i][3], $method_encrypt, $key_encrypt); ?>">
                  <input type="hidden" name="cantidad" id="cantidad" value="1">
                  <button class="fa-sharp fa-solid fa-cart-plus fa-2x iconoProducto" id="Click" type="submit" name="addProduct" value="add" style=" border: none; background: none; color: #71c500; cursor: pointer;">                
            </button>
            <a class="fa-solid fa-circle-info fa-2x iconoProducto" href="#" data-toggle="modal" data-target="#modalProducto<?php echo $idPro ?>" style="color: #2c9182;"></a>
          </form>


                    </div>
                  </div>
                  <h4 class="post-modern-title"><p class="post-modern-title"><?php echo $row[$i][1];?></p></h4>
                  <ul class="post-modern-meta">
                  <li style="text-transform: capitalize; color: #0263FF;">$<?php echo $row[$i][3]; ?> USD * kg</li>
                  <li style="text-transform: capitalize; color: #71c500;"><?php echo $row[$i][5]; ?> </li>
                  </ul>
                  <p style="font-weight: normal;">Categoria: <?php echo $row[$i][5]; ?> </p>
                </tr>
              </article>
          </div>

          <div class="modal fade" id="modalProducto<?php echo $idPro ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Información del producto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <div class="cerrar" aria-hidden="true">&times;</div>
                  </button>
                </div>
                <div class="modal-body" style="text-align: left;">
                  <img style="width: 250px; height: 250px; float: left; margin-right: 15px;" src="<?php echo $row[$i][6]; ?>" alt="" />
                  <p style="font-weight: normal; color: black;">Categoria:</p><?php echo $row[$i][5]; ?>
                  <aside style="font-weight: normal; color: black; margin-top: 10px;"><?php echo $row[$i][2]; ?></aside><br>
                  <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                    <form action="carrito.php" method="post">
                      <p style="text-align: center; font-weight: bold; color: black;">Cantidad de productos:
                        <button type="button" style="width: 30px; height: 30px;" data-action="decrement">
                          <span class="m-auto text-2xl font-thin" style="font-weight: bold; color: black;">−</span>
                        </button>
                        <input id="cantidad" name="cantidad" style="width: 50px;" value="1">
                        <button type="button" style="width: 30px; height: 30px;" data-action="increment">
                          <span class="m-auto text-2xl font-thin" style="font-weight: bold; color: black;">+</span>
                        </button>
                      </p>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #71c500; color: white;">Regresar</button>
                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($idPro, $method_encrypt, $key_encrypt); ?>">
                  <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($row[$i][6], $method_encrypt, $key_encrypt); ?>">
                  <input type="hidden" name="nombreProducto" id="nombreProducto" value="<?php echo openssl_encrypt($row[$i][1], $method_encrypt, $key_encrypt); ?>">
                  <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($row[$i][3], $method_encrypt, $key_encrypt); ?>">
                  <button type="submit" name="addProduct" value="add" class="btn" style="text-transform: none; background-color: #2d9082; color: white;">¡Comprar ahora!</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
            ?>
          <div class="col-md-12 wow-outer"><a class="button button-primary button-md" href="typography.php">Ver más productos</a></div>
        </div>
      </div>
    </section>

    <script>
      function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
          'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        if (value > 0) {
          value--;
          target.value = value;
        }
        if (value <= 0) {
          target.value = 1;
        }
      }

      function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
          'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
      }

      const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
      );

      const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
      );

      decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
      });

      incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
      });
    </script>


    <section class="section novi-background section-lg bg-gray-100">
      <div class="container">
        <div class="row row-30">
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-chloe__icon novi-icon fa-solid fa-microscope wow fadeIn" style="color: white;"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown" style="color: white;">Nutrición Celular</h4>
                <p class="wow fadeInUpSmall" style="color: white;">
                  ININBIO al igual que la Universidad de Guanajuato (UG), trabajamos con amplia dedicación en el tema de nutrición celular dando soporte técnico a nuestros clientes en llevar a cabo procesos de alto nivel ayudando a reducir costos y aumentar la productividad.
                </p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-chloe__icon novi-icon fa-solid fa-flask-vial wow fadeIn" style="color: white;" data-wow-delay=".1s"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown" style="color: white;" data-wow-delay=".1s">Técnicas de conservación de Levaduras</h4>
                <p class="wow fadeInUpSmall" style="color: white;" data-wow-delay=".1s">
                  Trabajamos en conjunto con la Universidad Nacional Autónoma de México (UNAM), para dar un amplio servicio de técnicas de conservación de levaduras, ya que esto permite al industrial tener siempre su misma levadura sin contaminación.
                </p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal -->
            <article class="box-minimal">
              <div class="box-chloe__icon novi-icon fa-solid fa-hand-holding-heart wow fadeIn" style="color: white;" data-wow-delay=".2s"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown" style="color: white;" data-wow-delay=".2s">Análisis Gratuitos</h4>
                <p class="wow fadeInUpSmall" style="color: white;" data-wow-delay=".2s">
                  Nuestro equipo técnico y científico hace análisis ¡GRATUITOS! a sus procesos de fermentación para lograr un eficaz diagnóstico sobre la eficiencia del proceso y las sugerencias para obtener así mejores resultados.
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>


    <section class="section novi-background section-lg text-center" style="background-color: #2c9182;">
      <div class="container">
        <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Testimonios</span></h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731" data-autoplay-timeout="4268" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-6-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Alberto Webb</cite>
                <p class="quote-classic-caption">Cliente habitual</p>
              </div>
            </div>
            <div class="quote-classic-text" style="color: black;">
              <p>Acabo de comprar un apartamento en Los Ángeles gracias a ti y a tus corredores. Todo fue fácil y sin problemas, el precio fue bastante asequible y estoy seguro de que volveré a utilizar sus servicios en el futuro.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-1-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Kelly McMillan</cite>
                <p class="quote-classic-caption">Cliente habitual</p>
              </div>
            </div>
            <div class="quote-classic-text" style="color: black;">
              <p>Recientemente vendí mi propiedad de alquiler en Nelson a través de inHouse. Todo lo relacionado con la venta fue realizado sin problemas por su equipo. Me diste muy buenos consejos sobre lo necesario para agilizar la venta.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Harold Barnett</cite>
                <p class="quote-classic-caption">Cliente habitual</p>
              </div>
            </div>
            <div class="quote-classic-text" style="color: black;">
              <p>Realmente aprecio su tiempo y experiencia para ayudarme a encontrar y comprar mi casa actual en Seattle, WA. Espero que podamos hacer negocios nuevamente en el futuro y lo recomendaré a familiares y amigos.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Bill Warner</cite>
                <p class="quote-classic-caption">Cliente habitual</p>
              </div>
            </div>
            <div class="quote-classic-text" style="color: black;">
              <p>Acabo de vender una propiedad con inHouse y no puedo agradecerles lo suficiente. Su equipo tiene grandes habilidades de comunicación y se han comunicado regularmente conmigo durante todo el proceso.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-4-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Ann Lee</cite>
                <p class="quote-classic-caption">Cliente habitual</p>
              </div>
            </div>
            <div class="quote-classic-text" style="color: black;">
              <p>Su equipo calificado me ayudó a hacer realidad el sueño de vender mi antigua propiedad. La venta transcurrió sin problemas y acabo de cerrar un nuevo lugar ideal al que estoy emocionado de llamar hogar. ¡Gracias por sus excelentes servicios!</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-5-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Peter Clarkson</cite>
                <p class="quote-classic-caption">Cliente habitual</p>
              </div>
            </div>
            <div class="quote-classic-text" style="color: black;">
              <p>I have to say that inHouse has the best brokers we've ever worked with. Their professionalism, personality, attention to detail, responsiveness and ability to close the deal are outstanding!</p>
            </div>
          </blockquote>
        </div>
      </div>
    </section>


    <!-- <a class="banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_big_02.jpg" alt=""/></a> -->
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
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/di-phosta.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/di-phosta.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/nutri-fast.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/nutri-fast.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/nitro-ferm.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/nitro-ferm.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/vinimax.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/vinimax.png" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/urea.png" alt=""/>
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



<script>
document.body.onload = productosCarritos();
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
<!-- Modal -->

</html>