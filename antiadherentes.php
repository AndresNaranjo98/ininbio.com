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
  <title>Ininbio/Productos</title>
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
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="rd-nav-item">
                    <p class="rd-nav-link" style="cursor: pointer;">Nosotros</p>
                    <ul class="menu-vertical">
                      <li> <a class="rd-nav-link" href="about-us.php">Acerca de Nosotros</a></li>
                      <li><a class="rd-nav-link" href="certificaciones.php">Certificaciones</a></li>
                      <li><a class="rd-nav-link" href="diagnosticos.php">Diagnósticos Gratuitos</a></li>
                      <li><a class="rd-nav-link" href="investigaciones.php">Investigaciones</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="typography.php">Productos</a>
                    <ul class="menu-vertical">
                      <li><a class="rd-nav-link" href="levaduras.php">Levaduras</a></li>
                      <li><a class="rd-nav-link" href="nutrientes.php">Nutrientes</a></li>
                      <li><a class="rd-nav-link" href="antiespumantes.php">Antiespumantes</a></li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="antiadherentes.php">Antiadherentes</a></li>
                    </ul>
                  </li>
                  <li id="loginRegister" style="cursor: pointer;" class="rd-nav-item"><a class="rd-nav-link" href="login.php"><span class="icon novi-icon icon-md mdi mdi-account"></span></a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="carrito.php"><span id="contar" class="icon novi-icon icon-sm mdi mdi-cart"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class="section novi-background section-xl" style="margin-top: 30px;">
      <h1 style="text-align: center;">Antiadherentes</h1>
      <hr class="my-4" />
      <!-- <h3 style="text-align: center;">TEQUILA</h3> -->
      <!-- <hr class="my-4" /> -->
      <?php

      include('./conexionBD/connection.php');
      require('vendor/autoload.php');

      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
      $dotenv->load();

      $key_encrypt = $_ENV['KEY_ENCRYPT'];
      $method_encrypt = $_ENV['METHOD_ENCRYPT'];

      $consultaLogin = "SELECT * FROM ininbiowebapp.productos WHERE insumos LIKE '%antiadherente%';";
      // }
      $sentencia = $conn->prepare($consultaLogin);
      $sentencia->execute();
      $result = $sentencia->get_result();
      ?>

      <!--Cards Products-->
      <div class="c">
        <div class="pro">
          <?php
          $row = $result->fetch_all();
          for ($i = 0; $i < count($row); ++$i) {
            // while($row = $result->fetch_array()){
            $idPro = $row[$i][0];
            // print_r($row[$i]);

          ?>
            <div class="pr">
              <div class="imghere">
                <img src="<?php echo $row[$i][4]; ?>" alt="">
              </div>
              <div style="text-align: center;">
                <div class="name"> <?php echo $row[$i][1]; ?> </div>
                <div class="job"><?php echo $row[$i][3]; ?> USD</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="#" data-toggle="modal" data-target="#modalProducto<?php echo $idPro ?>"><i class="fa-solid fa-info"></i></a>
              </div>
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
                  <div class="modal-body">
                    <img style="width: 250px; height: 250px; float: left; margin-right: 15px;" src="<?php echo $row[$i][4]; ?>" alt="" />
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
                    <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($row[$i][4], $method_encrypt, $key_encrypt); ?>">
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
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/di-phosta.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/di-phosta.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/nutri-fast.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/nutri-fast.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/nutri-ferm.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/nutri-ferm.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/vinimax.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/vinimax.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/urea.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/urea.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/ron.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/ron.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/leva.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/leva.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/antiespumante.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/antiespumante.png" alt="" />
                    <div class="thumbnail-minimal-caption"> </div>
                  </a></div>
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
        <hr />
      </div>
      <div class="footer-advanced-aside">
        <div class="container">
          <div class="footer-advanced-layout"><a class="brand" href="index.html"><img src="images/main-logo.png" alt="" width="115" height="34" srcset="images/main-logo.png 2x" /></a>
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

  <!-- MODAL LOGOUTT -->

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


  <script type="text/javascript">
    var btnElm = document.getElementById('Click');
    var pElm = document.getElementById('contar');
    var contar = 0;

    btnElm.onclick = function() {

      contar++;

      pElm.textContent = contar;

    }
  </script>

  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/boton.js"></script>
  <script src="js/script.js"></script>
</body>

</html>