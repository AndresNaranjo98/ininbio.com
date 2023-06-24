<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Ininbio/Servicios</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="./images/logoWeb.png" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css" id="main-styles-link">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
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
<?php include_once("googleAnalytics.php") ?>
  <!-- <div id="google_translate_element"></div> -->
  <div class="preloader">
    <div class="preloader-logo"><img src="images/main-logo.webp" alt="" width="250" height="130" srcset="images/main-logo.webp 2x" />
    </div>
    <div class="preloader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
  <div class="page">
    <!-- Page Header<a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"> -->
      <!-- <img src="images/intense_02.jpg" alt=""/> -->
    </a>
    <header class="section novi-background page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
          <div class="rd-navbar-aside-outer" style="text-align: center;">
            <div class="rd-navbar-aside">
              <!-- RD Navbar Panel-->

              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.php" aria-label="logoIndex"><img src="images/main-logo.webp" width="250" height="130" alt="logoPreloader" srcset="images/main-logo.webp 2x" /></a>
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
                      <li><a class="rd-nav-link" href="about-us.php">¿Quiénes Somos?</a></li>
                      <li><a class="rd-nav-link" href="certificaciones.php">Certificaciones</a></li>
                      <!-- <li><a class="rd-nav-link" href="diagnosticos.php">Diagnósticos Gratuitos</a></li> -->
                      <li><a class="rd-nav-link" href="investigaciones.php">Investigaciones</a></li>
                      <li><a class="rd-nav-link" href="distribuicion.php">Puntos de Distribuición</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item">
                    <p class="rd-nav-link" id="productosWeb" onmouseover="toggleTranslateIcon()" onmouseout="toggleTranslateIcon()" style="cursor: pointer; font-size: 19px">Productos</p>
                    <p class="rd-nav-link" id="productosMovil" onclick="productos()" style="cursor: pointer; font-size: 19px; display: none;">Productos</p>
                    <ul class="menu-vertical" id="menu-vertical" style="text-align: center;">
                      <li><a class="rd-nav-link" href="typography.php">Productos</a></li>
                      <li class="rd-nav-item">
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
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="diagnosticos.php" style="font-size: 19px">Servicios</a>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="convenios.php" style="font-size: 19px">Convenios</a>
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

    <script>
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

    <section class="section novi-background section-xl" style="margin-top: 30px; max-width: 100%; background : url('./images/19366.webp') no-repeat; background-size: cover;">

      <div class="row">
        <div class="col-12 col-md-7">
          <div class="container">
            <img src="./images/inSitu1.webp" id="imagenIcono" alt="analisisInSitu" style="width: 100%; height: 350px;">
            <p id="tituloIcono" style="font-size: 30px; color: black; font-weight: normal; text-align: center; text-transform: uppercase;">Servicios de Análisis In Situ</p>
            <!-- <p style="font-size: 30px; font-weight: normal; color: black;">AQUÍ IRÁ EL TEXTO POR ICONO SELECCIONADO</p> -->
            <p id="descripcionIcono" style="font-size: 20px; color: black; font-weight: normal; text-align: justify;">Nuestro equipo técnico y científico hace análisis a sus procesos de fermentación
              para lograr un diagnóstico sobre la eficiencia del proceso y las sugerencias para obtener mejores resultados.
              <br>
              <br>
              •Análisis de PH<br>
              •Análisis de temperatura.<br>
              •Análisis de población.<br>
              •Análisis de viabilidad.<br>
              •Caracterización morfológica.<br>
              •Análisis de °BRIX.<br>
              •Análisis de Riqueza Alcohólica.
            </p>
          </div>
        </div>
        <div class="col-md-5" style="display: flex;">
          <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-md-8">
              <div class="row">
                <div class="col-6 text-center">
                  <img src="./images/iconoServicios/magnifying.webp" alt="magnifying" class="bordesCirculares" onclick="inSitu('./images/inSitu1.webp')" title="https://www.flaticon.com/free-icons/microscope-slides Microscope slides icons created by Konkapp - Flaticon">
                  <p style="font-size: 20px; color: black; font-weight: normal;">Servicio de Análisis In Situ</p>
                </div>
                <div class="col-6 text-center">
                  <img src="./images/iconoServicios/stem-cell-therapy.webp" alt="cell-therapy" class="bordesCirculares" onclick="nutriEspecifico('./images/nutrientesEspecificos.webp')" title="https://www.flaticon.com/free-icons/stem-cell-therapy Stem cell therapy icons created by Freepik - Flaticon">
                  <p style="font-size: 20px; color: black; font-weight: normal;">Desarrollo de Nutrientes Específicos</p>
                </div>
                <div class="col-6 text-center" style="margin-top: 25px;">
                  <img src="./images/iconoServicios/cepas.webp" alt="cepas" class="bordesCirculares" onclick="aislamientoCepas('./images/aislamientoCepas.webp');" title="https://www.flaticon.com/free-icons/cell Cell icons created by Paul J. - Flaticon">
                  <p style="font-size: 20px; color: black; font-weight: normal;">Aislamiento y Selección de Cepas</p>
                </div>
                <div class="col-6 text-center" style="margin-top: 25px;">
                  <img src="./images/iconoServicios/pipette.webp" alt="pipeta" class="bordesCirculares" onclick="propagacionCepas('./images/propagacionCepas1.webp');" title="https://www.flaticon.com/free-icons/healthcare-and-medical Healthcare and medical icons created by justicon - Flaticon">
                  <p style="font-size: 20px; color: black; font-weight: normal;">Trabajos de Propagación de Cepas de Levadura</p>
                </div>
                <div class="col-6 text-center" style="margin-top: 25px;">
                  <img src="./images/iconoServicios/desarrolloTecnologico.webp" alt="pipeta" class="bordesCirculares" onclick="desarrolloTecnologico('./images/dptoDesarrollo.webp');" title="https://www.flaticon.es/iconos-gratis/tecnologia tecnología iconos Tecnología iconos creados por Eucalyp - Flaticon">
                  <p style="font-size: 20px; color: black; font-weight: normal;">Departamento de Desarrollo Tecnológico</p>
                </div>
                <div class="col-6 text-center" style="margin-top: 25px;">
                  <img src="./images/iconoServicios/dptoIDi.webp" alt="pipeta" class="bordesCirculares" onclick="lbtoIDi('./images/laboratorioIDi.webp');" title="https://www.flaticon.es/iconos-gratis/idea idea iconos Idea iconos creados por geotatah - Flaticon">
                  <p style="font-size: 20px; color: black; font-weight: normal;">Laboratorio de Investigación, Desarrollo e Innovación (I + D + i)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      function nutriEspecifico(urlImagen) {
        var miDiv = document.getElementById("imagenIcono");
        document.getElementById('tituloIcono').innerHTML = 'Desarrollo de Nutrientes Específicos';
        document.getElementById('descripcionIcono').innerHTML = 'ININBIO desarrolla fórmulas para los procesos de fermentación específicos mencionados en nuestro catálogo, pero a veces incursionamos en fórmulas muy específicas para algunos clientes porque sus procesos son especiales con requisitos nutricionales determinados.';
        miDiv.src = urlImagen;
        miDiv.style.width = '100%';
        miDiv.style.height = '350px';
      }

      function inSitu(urlImagen) {
        var miDiv = document.getElementById("imagenIcono");
        document.getElementById('tituloIcono').innerHTML = 'Servicio de Análisis In Situ';
        document.getElementById('descripcionIcono').innerHTML = 'Nuestro equipo técnico y científico hace análisis a sus procesos de fermentación para lograr un diagnóstico sobre la eficiencia del proceso y las sugerencias para obtener mejores resultados.<br><br>•Análisis de PH<br>•Análisis de temperatura.<br>•Análisis de población.<br>•Análisis de viabilidad.<br>•Caracterización morfológica.<br>•Análisis de °BRIX.<br>•Análisis de Riqueza Alcohólica.';
        miDiv.src = urlImagen;
        miDiv.style.width = '100%';
        miDiv.style.height = '350px';
      }

      function aislamientoCepas(urlImagen) {
        var miDiv = document.getElementById("imagenIcono");
        document.getElementById('tituloIcono').innerHTML = 'Aislamiento y Selección de Cepas';
        document.getElementById('descripcionIcono').innerHTML = 'En ININBIO, la selección y el aislamiento de las cepas se realizan con el objetivo de encontrar levaduras con características de gran interés para la fermentación alcohólica, destinadas a la fabricación de bebidas alcohólicas, o para lograr la diferenciación de cepas de levaduras que tengan un gran valor industrial ya conocido.';
        miDiv.src = urlImagen;
        miDiv.style.width = '100%';
        miDiv.style.height = '350px';
      }

      function propagacionCepas(urlImagen) {
        var miDiv = document.getElementById("imagenIcono");
        document.getElementById('tituloIcono').innerHTML = 'Trabajos de Propagación de Cepas de Levadura';
        document.getElementById('descripcionIcono').innerHTML = 'Dentro de nuestros servicios se encuentra la asesoría para hacer más eficiente la propagación de la levadura mediante la obtención de biomasa en condiciones aeróbicas, implicando varios escalados durante el proceso que finalizan en la inoculación de la levadura en un mosto adecuado para sus condiciones de fermentación garantizando así la pureza de la cepa, inocuidad y valores adecuados de viabilidad celular evitando su envejecimiento.';
        miDiv.src = urlImagen;
        miDiv.style.width = '100%';
        miDiv.style.height = '350px';
      }

      function desarrolloTecnologico(urlImagen) {
        var miDiv = document.getElementById("imagenIcono");
        document.getElementById('tituloIcono').innerHTML = 'Departamento de Desarrollo Tecnológico';
        document.getElementById('descripcionIcono').innerHTML = 'El Departamento de Desarrollo Tecnológico es el motor impulsor de la innovación y el éxito tecnológico dentro de una organización. Nuestro equipo altamente capacitado y especializado se dedica a diseñar, desarrollar e implementar soluciones tecnológicas personalizadas que mejoran la eficiencia así como optimizan y potencian tus procesos de fermentación.<br><br>Nuestra consigna primordial es lograr la implementación y el despliegue de las más innovadoras soluciones tecnológicas. Nos aseguramos de que cada desarrollo que te proveemos sea exitoso y de calidad, además te brindamos un soporte técnico continuo para garantizar que las soluciones estén funcionando de manera óptima así como para resolver cualquier problema técnico que pueda surgir.';
        miDiv.src = urlImagen;
        miDiv.style.width = '100%';
        miDiv.style.height = '350px';
      }

      function lbtoIDi(urlImagen) {
        var miDiv = document.getElementById("imagenIcono");
        document.getElementById('tituloIcono').innerHTML = 'Laboratorio de Investigación, Desarrollo e innovación (I + D + i)';
        document.getElementById('descripcionIcono').innerHTML = 'El Laboratorio de Investigación, Desarrollo e Innovación, tiene por objeto brindar valor a nuestros clientes, esto a través de servicios que ofrecen soluciones integrales, de análisis e información relevante, para maximizar la eficiencia de sus procesos de fermentación.';
        miDiv.src = urlImagen;
        miDiv.style.width = '100%';
        miDiv.style.height = '350px';
      }
    </script>

    <!-- Working at CaseCraft-->

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
          <div class="footer-advanced-layout"><a class="brand" href="index.php" aria-label="logoFooter"><img src="images/main-logo.webp" alt="" width="115" height="34" srcset="images/main-logo.webp 2x" /></a>
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
  </script>

  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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

</html>