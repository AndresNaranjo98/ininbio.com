<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Ininbio/Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="./images/logoWeb.png" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/fonts.css"> -->
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
</head>

<body>
<?php include_once("googleAnalytics.php") ?>
    <div class="preloader">
        <div class="preloader-logo"><img src="images/main-logo.webp" alt="logo_Preloader" width="250" height="130" srcset="images/main-logo.webp 2x" />
        </div>
        <div class="preloader-body">
            <div id="loadingProgressG">
                <div class="loadingProgressG" id="loadingProgressG_1"></div>
            </div>
        </div>
    </div>

    <div class="page">
    <header class="section novi-background page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
          <div class="rd-navbar-aside-outer" style="text-align: center;">
            <div class="rd-navbar-aside">
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                    <a class="rd-navbar-brand" href="index.php" aria-label="logoIndex"><img src="images/main-logo.webp" width="250" height="130" alt="logoPreloader" srcset="images/main-logo.webp 2x" /></a>
              </div>

              <div class="rd-navbar-collapse">
                <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                  <article class="unit align-items-center" style="font-size: 20px; font-weight: normal;">
                    <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                    <div class="unit-body">
                      <ul class="list-0" style="font-size: 20px; font-weight: normal;">
                        <li><a class="link-default" href="tel:#">+55 (352) 522-7560</a></li>
                        <li><a class="link-default" href="tel:#">+55 (352) 522-7561</a></li>
                      </ul>
                    </div>
                  </article>
                  <article class="unit align-items-center" style="font-size: 20px; font-weight: normal;">
                    <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                    <div class="unit-body">
                      <ul class="list-0">
                        <li><a class="link-default" href="https://goo.gl/maps/stCLzY3ohG2hGx6Z6">Aldama #45<br> Col. Centro <br> C.P. 59430, La Piedad, Michoacán, México.</a></li>
                      </ul>
                    </div>
                  </article>
                  <!-- <a class="button button-gray-bordered button-winona" href="#">Request a call</a> -->
                  <article class="unit align-items-center" style="font-size: 20px; font-weight: normal;">
                    <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-email"></span></div>
                    <div class="unit-body"><a class="link-default notranslate" href="tel:#">contacto@ininbio.com</a></div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                <ul class="rd-navbar-nav menu-horizontal">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php" style="font-size: 19px">Inicio</a>
                  </li>
                  <li class="rd-nav-item">
                    <p class="rd-nav-link" id="aboutWeb" onmouseover="toggleTranslateIcon()" onmouseout="toggleTranslateIcon()" style="cursor: pointer; font-size: 19px">Acerca de Nosotros</p>
                    <p class="rd-nav-link" id="aboutMovil" onclick="aboutUs()" style="cursor: pointer; font-size: 19px">Acerca de Nosotros</p>
                    <ul class="menu-vertical" id="menu-vertical1" style="text-align: center;">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="about-us.php" style="text-align: center;">¿Quiénes Somos?</a></li>
                      <li><a class="rd-nav-link" href="certificaciones.php">Certificaciones</a></li>
                      <li><a class="rd-nav-link" href="investigaciones.php">Investigaciones</a></li>
                      <li><a class="rd-nav-link" href="distribuicion.php">Puntos de Distribuición</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item">
                    <p class="rd-nav-link" id="productosWeb" onmouseover="toggleTranslateIcon()" onmouseout="toggleTranslateIcon()" style="cursor: pointer; font-size: 19px">Productos</p>
                    <p class="rd-nav-link" id="productosMovil" onclick="productos()" style="cursor: pointer; font-size: 19px; display: none;">Productos</p>
                    <ul class="menu-vertical" id="menu-vertical" style="text-align: center;">
                      <li><a class="rd-nav-link" href="typography.php">Productos</a></li>
                      <li class="rd-nav-item" style="text-align: center;">
                        <a class="rd-nav-link" id="levadurasWeb" href="#" onmouseover="toggleTranslateIcon()" onmouseout="toggleTranslateIcon()" style="cursor: pointer;">Levaduras</a>
                        <p class="rd-nav-link" id="levadurasMovil" onclick="levaduras()" style="cursor: pointer;">Levaduras</p>
                        <ul class="menu-submenu" id="menu-submenu">
                          <form action="levaduras.php" method="post">
                            <li><button class="botonSubmenu" type="submit" id="tequila" name="tequila" value="tequila">
                                <p id="classTequila" style="cursor: pointer;">Tequila</p>
                              </button>
                            </li>
                            <li><button class="botonSubmenu" type="submit" id="mezcal" name="mezcal" value="mezcal">
                                <p id="classMezcal" style="cursor: pointer;">Mezcal</p>
                              </button>
                            </li>
                            <li><button class="botonSubmenu" type="submit" id="vino" name="vino" value="vino">
                                <p id="classVino" style="cursor: pointer;">Vino</p>
                              </button>
                            </li>
                            <li><button class="botonSubmenu" type="submit" id="cerveza" name="cerveza" value="cerveza">
                                <p id="classCerveza" style="cursor: pointer;">Cerveza</p>
                              </button>
                            </li>
                          </form>
                        </ul>
                      </li>
                      <li><a class="rd-nav-link" href="nutrientes.php">Nutrientes</a></li>
                      <li><a class="rd-nav-link" href="antiespumantes.php">Antiespumantes</a></li>
                      <li><a class="rd-nav-link" href="desarrolloT.php">Desarrollo Tecnologico</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="diagnosticos.php" style="font-size: 19px">Servicios</a>
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="convenios.php" style="font-size: 19px">Convenios</a>
                  <li id="translate" class="rd-nav-item">
                    <p class="rd-nav-link" style="z-index: 0.5;"><span id="translate-icon" style="font-size: 22px" class="icon novi-icon mdi mdi-google-translate"></span></p>
                    <ul class="menu-vertical" style="text-align: center; background-color: transparent;">
                      <li>
                        <div class="google-translate-container" id="google_translate_element"></div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class="section novi-background section-xl">
        <div class="fondoInvestigaciones">
            <p class="tituloAbout" style="font-size: 30px;">
                Convenios y Colaboraciones
            </p>
        </div>

        <div class="container" style="margin-top: 30px;">
            <div class="row carouselConvenios">
                <div>
                <img src="https://i.ibb.co/r48VfHX/colab-Estudiantes.jpg" alt="colab-Estudiantes" width="100%" height="50%">
                    <p class="textoConvenios">
                        Como resultado de un proyecto de investigación científica desarrollado en la <strong>Universidad de Guanajuato</strong> fue inaugurada la planta 
                        piloto de levaduras <strong>INLEMEX S.A. de C.V.</strong> en La Piedad, Michoacán. Tratándose de una empresa de base tecnológica en donde, con la 
                        colaboración de la Universidad de Guanajuato se producen levaduras con características específicas que demanda la industria 
                        alimentaria y tequilera. La edificación de esta planta es un modelo de creación de empresas con alto potencial buscando así de igual 
                        manera diversificar las fuentes de financiamiento de la Universidad en donde la generación de empresas de base tecnológica sea una 
                        opción viable que además fomente la innovación llevando los resultados de la ciencia a la industria dentro del amplio mercado 
                        de la panificación y de bebidas con alcohol.
                    </p>
                </div>
                <div>
                    <img src="https://i.ibb.co/qDvPcSY/colab-ITLP.jpg" alt="colab-ITLP" width="100%" height="50%">
                    <p class="textoConvenios">
                        Con el objetivo de crear un marco de colaboración académica, científica y tecnológica entre el <strong>TecNM campus La Piedad</strong> y la empresa 
                        <strong>Industrializadora de Levaduras Mexicanas SA de CV (INLEMEX)</strong>, signa convenio para realizar conjuntamente actividades que permitan 
                        conseguir el máximo desarrollo en la formación y especialización de los jóvenes estudiantes del TecNM  campus La Piedad. 
                        El convenio responde al objetivo de establecer las bases de formación y especialización de recursos humanos, investigaciones conjuntas;
                        desarrollo tecnológico y académico, intercambio de información, asesoría técnica o académica y publicaciones. Ofreciendo además 
                        asistencia académica, cultural, tecnológica y de servicio, así como, divulgación del conocimiento, en todas aquellas áreas de coincidencia 
                        institucional, a través de planeación y realización de acciones de colaboración, intercambio y apoyo mutuo.  
                    </p>
                </div>
                <div>
                    <img src="https://i.ibb.co/9gq8N33/colab-CINVESTAV.jpg" alt="colab-CINVESTAV" width="100%" height="50%">
                    <p class="textoConvenios">
                        <strong>Inovaciones Industriales Biotecnológicas (Ininbio)</strong> y <strong>Cinvestav Unidad Irapuato</strong> unen sus conocimientos, recursos y capacidades 
                        técnicas para impulsar el descubrimiento y la comprensión de los mecanismos genéticos de las levaduras. Este tipo de investigación 
                        tiene aplicaciones amplias y significativas, desde la mejora de la fermentación en la industria de alimentos y bebidas, hasta la 
                        producción de biocombustibles y la síntesis de compuestos bioactivos. Ambas organizaciones se comprometen a colaborar estrechamente 
                        en el intercambio de datos, el acceso a tecnologías de vanguardia y el desarrollo conjunto de proyectos de investigación. Además, se 
                        fomenta la formación de talento humano mediante la participación de investigadores y estudiantes de ambas instituciones, creando así 
                        una sinergia única que impulsará la innovación y la transferencia de conocimiento. Este convenio representa un paso significativo en 
                        el avance de la genómica de levaduras y en el fortalecimiento de la colaboración entre el sector empresarial y el ámbito académico.
                    </p>
                </div>
                <div>
                    <img src="https://i.ibb.co/60k8G3N/coUNAM.jpg" alt="coUNAM" width="100%" height="50%">
                    <p class="textoConvenios">
                        Como parte de una alianza estratégica, <strong>Inovaciones Industriales Biotecnológicas (Ininbio)</strong> y la <strong>Universidad Nacional 
                        Autonóma De México (UNAM)</strong> colaboran estrechamente para desarrollar métodos de conservación de levaduras eficientes y sostenibles. 
                        Trabajando en conjunto para optimizar técnicas tradicionales y explorar nuevas aproximaciones basadas en la tecnología y la innovación. 
                        Teniendo como objetivo mejorar la viabilidad y la estabilidad de las levaduras a largo plazo, lo que impactará positivamente en 
                        industrias como la producción de alimentos y bebidas tomando en cuenta que la conservación adecuada de las levaduras garantiza la calidad 
                        y la eficiencia de los procesos industriales, y con esta colaboración se facilitará el intercambio de conocimientos, recursos y 
                        tecnologías entre ambas organizaciones.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="section novi-background footer-advanced bg-gray-700">
      <div class="footer-advanced-main">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-4">
              <h4 class="font-weight-bold text-uppercase text-white">Acerca de Nosotros</h4>
              <p class="footer-advanced-text" style="color: white; font-size: 20px; text-align: justify;">
                ININBIO, surge de la necesidad de satisfacer la demanda del sector de las bebidas alcohólicas que busca nutrientes, levaduras e insumos para sus fermentaciones de la más alta calidad y con innovaciones en cuanto a desarrollo de fórmulas novedosas de acuerdo a sus necesidades.
              </p>
            </div>
            <div class="col-sm-7 col-md-5 col-lg-4">
              <h4 class="font-weight-bold text-uppercase text-white">Horario de Oficina</h4>
              </span>
              <p class="footer-advanced-text" style="color: white; font-size: 20px;">
                Lunes a Viernes de 8:00 a.m. a 6:00 p.m.
              </p>
              <div style="margin-top: 20px;">
                <h4 class="font-weight-bold text-uppercase text-white">Síguenos en redes Sociales</h4>
                <ul class="foter-social-links list-inline list-inline-md" style="margin-top: 20px;">
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-facebook" href="https://www.facebook.com/ininbio" aria-label="facebook"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-instagram" href="https://www.instagram.com/grupo_ininbio/" aria-label="instagram"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-tiktok" href="https://www.tiktok.com/@ininbio_channel" aria-label="tiktok"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-youtube" href="https://www.youtube.com/channel/UCvKFK3cB9022p2tpf3OItrg" aria-label="youtube"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-whatsapp" href="https:\/\/api.whatsapp.com/send?phone=5213521429098" aria-label="whatsapp"></a></li>
                  <!-- <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li> -->
                  <!-- <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-sm-5 col-md-7 col-lg-4">
              <h4 class="font-weight-bold text-uppercase text-white">Galería de Productos</h4>
              <div class="row row-x-10" data-lightgallery="group">
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/di-phosta.webp" data-lightgallery="item" aria-label="di-phosta"><img class="thumbnail-minimal-image" src="images/productos/di-phosta.webp" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/nutri-fast.webp" data-lightgallery="item" aria-label="nutri-fast"><img class="thumbnail-minimal-image" src="images/productos/nutri-fast.webp" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/nitro-ferm.webp" data-lightgallery="item" aria-label="nitro-ferm"><img class="thumbnail-minimal-image" src="images/productos/nitro-ferm.webp" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/vinimax.webp" data-lightgallery="item" aria-label="vinimax"><img class="thumbnail-minimal-image" src="images/productos/vinimax.webp" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/urea.webp" data-lightgallery="item" aria-label="urea"><img class="thumbnail-minimal-image" src="images/productos/urea.webp" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/ron.webp" data-lightgallery="item" aria-label="nutri-ron"><img class="thumbnail-minimal-image" src="images/ron.webp" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/leva.webp" data-lightgallery="item" aria-label="levadura"><img class="thumbnail-minimal-image" src="images/leva.webp" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/antiespumante.webp" data-lightgallery="item" aria-label="antiespumante"><img class="thumbnail-minimal-image" src="images/antiespumante.webp" alt="" />
                    <div class="thumbnail-minimal-caption"> </div>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <hr />
      </div>
      <div class="footer-advanced-aside">
        <div class="container">
          <div class="footer-advanced-layout"><a class="brand" href="index.php"><img src="images/main-logo.webp" alt="" width="115" height="34" srcset="images/main-logo.webp 2x" /></a>
            <!-- Rights-->
            <p class="rights"><span style="color: #71c500;">&copy;&nbsp;</span><span class="copyright-year"></span></p>
            <p class="rights" style="color: #2c9182;">www.ininbio.com</p>
          </div>
        </div>
      </div>
    </footer>

    </div> <!-- DIV PAGE -->

  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $('.carouselConvenios').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 30000
    });

    var mouseEvent = document.getElementById("translate");
    mouseEvent.addEventListener("mouseover", function traductorGoogle() {
      new google.translate.TranslateElement({
          pageLanguage: 'es',
          layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
          includedLanguages: 'en,fr,de',
        },
        'google_translate_element');
    });

    function toggleTranslateIcon() {
      var translateIcon = document.getElementById("translate-icon");
      translateIcon.classList.toggle("hide");
    }

    var botonTequila = document.getElementById('tequila');
      botonTequila.addEventListener("click", () => {
        localStorage.setItem('levadura', 'tequila');
    });

      var botonMezcal = document.getElementById('mezcal');
      botonMezcal.addEventListener("click", () => {
        localStorage.setItem('levadura', 'mezcal');
    });

      var botonVino = document.getElementById('vino');
      botonVino.addEventListener("click", () => {
        localStorage.setItem('levadura', 'vino');
    });

      var botonCerveza = document.getElementById('cerveza');
      botonCerveza.addEventListener("click", () => {
        localStorage.setItem('levadura', 'cerveza');
    });

    window.addEventListener('load', function() {
        var movilProducts = document.getElementById('productosMovil');
        var webProducts = document.getElementById('productosWeb');
        var movilAbout = document.getElementById('aboutMovil');
        var webAbout = document.getElementById('aboutWeb');
        var movilLevaduras = document.getElementById('levadurasMovil');
        var webLevaduras = document.getElementById('levadurasWeb');
        if (window.matchMedia("(max-width: 600px)").matches) {
          movilProducts.style.display = "block";
          webProducts.style.display = "none";
          movilAbout.style.display = "block";
          webAbout.style.display = "none";
          movilLevaduras.style.display = "inherit";
          webLevaduras.style.display = "none";
        } else {
          movilProducts.style.display = "none";
          webProducts.style.display = "block";
          movilAbout.style.display = "none";
          webAbout.style.display = "block";
          movilLevaduras.style.display = "none";
          webLevaduras.style.display = "inherit";
        }
      });

      function levaduras() {
        var submenu = document.getElementById('menu-submenu');
        if (submenu.style.display === "inherit") {
          submenu.style.display = "none";
        } else {
          submenu.style.display = "inherit";
        }
      }

      function productos() {
        var submenu = document.getElementById('menu-vertical');
        if (submenu.style.display === "block") {
          submenu.style.display = "none";
          toggleTranslateIcon();
        } else {
          submenu.style.display = "block";
          toggleTranslateIcon();
        }
      }

      function aboutUs() {
        var submenu1 = document.getElementById('menu-vertical1');
        if (submenu1.style.display === "block") {
          submenu1.style.display = "none";
          toggleTranslateIcon();
        } else {
          submenu1.style.display = "block";
          toggleTranslateIcon();
        }
      }
  </script>

  <link rel="stylesheet" href="css\whats.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css\whats2.css">
  
  <div class="nav-bottom">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="popup-whatsapp fadeIn">
      <div class="content-whatsapp -top"><button type="button" class="closePopup">
          <i class="material-icons icon-font-color">close</i>
        </button>
        <p> <img src="images\secretary.webp" width="50" height="50"> Hola, ¿en que podemos ayudarle? </p>
      </div>
      <div class="content-whatsapp -bottom">
        <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
        <button class="send-msPopup" id="send-btn" type="button">
          <i class="material-icons icon-font-color--black">send</i>
        </button>
      </div>
    </div>
    <button type="button" id="whats-openPopup" class="whatsapp-button" aria-label="whatsappContact">
      <div class="float">
        <i class="fa fa-whatsapp my-float"></i>
      </div>
    </button>
    <div class="circle-anime"></div>
  </div>
  <script src="js\script2.js"></script>
    
</body>