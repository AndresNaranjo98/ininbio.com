<?php
session_start();
if(isset($_SESSION['rol'])){
  ?>
  <script>
    window.location.href="index.php";
  </script>
  <?php
}

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Ininbio/Registro</title>
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

    <style>
        body{
    background: -webkit-linear-gradient(left, #71c500, #2d9082);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    /* border-radius: 6rem; */
    width: 20%;
    /* margin-top: -5%; */
    /* transform: rotate(29deg); */
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
    </style>
    
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
                
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">Acerca de Nosotros</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Productos</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="certificaciones.html">Certificaciones</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="login.html"><span class="icon novi-icon icon-md mdi mdi-account"></span></a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="carrito.html"><span class="icon novi-icon icon-sm mdi mdi-cart"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

    <div class="container contact-form">
        <div class="contact-image wow slideInLeft">
            <img src="images/main-logo.png" alt="ininbio_contact" style="margin-top: 5%;"/>
        </div>
        <form method="post" action="procesoRegistro.php">
          <h3 class="font-weight-bold wow-outer"><span class="wow slideInDown" style="color: black;">Formulario de Registro</span></h3>
           <div class="row wow slideInUp">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)" value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="correo" class="form-control" placeholder="Correo" value="" required/>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea> -->
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" value="" required/>
                    </div>
                    <div class="form-group">
                        <!-- <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea> -->
                        <input type="tel" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" name="telefono" class="form-control" placeholder="Teléfono e.g.888 888 8888" value="" required/>
                    </div>
                    <div class="form-group">
                        <!-- <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea> -->
                        <input type="text" name="nombreUsuario" class="form-control" placeholder="Nombre de Usuario" value="" required/>
                    </div>
                </div>
                <div style="margin: 0 auto; display: inline-block; margin-top: 2%;">
                    <button type="submit" class="button button-primary button-winona button-md wow slideInRight">Registrarse</button>
                </div>
            </div>
        </form>
</div>

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
            <!-- <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-5.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-5-85x85.jpg" alt=""/>
                <div class="thumbnail-minimal-caption"></div></a></div>
            <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-6.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-6-85x85.jpg" alt=""/>
                <div class="thumbnail-minimal-caption"> </div></a></div>
            <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-7.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-7-85x85.jpg" alt=""/>
                <div class="thumbnail-minimal-caption"></div></a></div>
            <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-8.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-8-85x85.jpg" alt=""/>
                <div class="thumbnail-minimal-caption"></div></a></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-advanced-aside">
    <div class="container">
      <div class="footer-advanced-layout">
        <div>
          <ul class="list-nav"> 
            <li><a href="index.html">Inicio</a></li>
            <li><a href="about-us.html">Acerca de Nosotros</a></li>
            <li><a href="typography.html">Productos</a></li>
            <li><a href="certificaciones.html">Certificaciones</a></li>
            <!-- <li><a href="contacts.html">Contacts</a></li> -->
          </ul>
        </div>
        <div>
          <ul class="foter-social-links list-inline list-inline-md">
            <li><a class="icon novi-icon icon-sm link-default fa-brands fa-facebook" href="https://www.facebook.com/ininbio"></a></li>
            <li><a class="icon novi-icon icon-sm link-default fa-brands fa-instagram" href="https://www.instagram.com/grupo_ininbio/"></a></li>
            <li><a class="icon novi-icon icon-sm link-default fa-brands fa-tiktok" href="https://www.tiktok.com/@ininbio_channel"></a></li>
            <li><a class="icon novi-icon icon-sm link-default fa-brands fa-youtube" href="https://www.youtube.com/watch?v=k3uHN6LZpg8"></a></li>
            <li><a class="icon novi-icon icon-sm link-default fa-brands fa-whatsapp" href="https:\/\/api.whatsapp.com/send?phone=5213521429098"></a></li>
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


<div class="snackbars" id="form-output-global"></div>
    
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>