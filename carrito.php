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
        window.onload = what;

        function what() {
          document.getElementById('loginRegister').innerHTML = '<li id="loginRegister" class="rd-nav-item rd-nav-link" style="cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="icon novi-icon icon-md mdi mdi-logout"></span></li>';
          document.getElementById('productosInCart').innerHTML = '<li id="productosInCart" class="rd-nav-item active"><a class="rd-nav-link" href="carrito.php"><span class="icon novi-icon icon-sm mdi mdi-cart"><?php echo (empty($_SESSION['cart'])) ? 0 : count($_SESSION['cart']); ?></span></a></li>';
        };
      </script>
<?php
      break;
    default:
  }
} else {
  echo '
  <script>
    window.onload = function() {
        what();
        function what() {
            Swal.fire({
              icon: "error",
              title: "¡No has iniciado sesión!",
              text: "Debes iniciar sesión para agregar productos al carrito",
            }).then(function() {
              window.location = "login.php";
            });
  };
  }
  </script>';
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <div class="preloader-logo"><img src="images/main-logo.png" alt="" width="250" height="130" srcset="images/main-logo.png 2x" />
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
          <div class="rd-navbar-aside-outer" style="text-align: center;">
            <div class="rd-navbar-aside">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.php"><img src="images/main-logo.png"  width="250" height="130" srcset="images/main-logo.png 2x" /></a>
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
          <div class="rd-navbar-main-outer" style="padding-left: 25%;">
            <div class="rd-navbar-main" >
              <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">

              <ul class="rd-navbar-nav menu-horizontal">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php" style="font-size: 19px">Inicio</a>
                  </li>
                  <li class="rd-nav-item" >
                    <p class="rd-nav-link" style="cursor: pointer; font-size: 19px">Acerca de Nosotros</p>
                    <ul class="menu-vertical" style="text-align: center;">
                      <li><a class="rd-nav-link" href="about-us.php">¿Quiénes Somos?</a></li>
                      <li><a class="rd-nav-link" href="certificaciones.php">Certificaciones</a></li>
                      <li><a class="rd-nav-link" href="diagnosticos.php">Diagnósticos Gratuitos</a></li>
                      <li><a class="rd-nav-link" href="investigaciones.php">Investigaciones</a></li>
                      <li><a class="rd-nav-link" href="distribuicion.php">Puntos de Distribuición</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item" >
                    <p class="rd-nav-link" style="cursor: pointer; font-size: 19px">Productos</p>
                    <ul class="menu-vertical" style="text-align: center;">
                    <li><a class="rd-nav-link" href="typography.php">Productos y servicios</a></li>
                      <li><a class="rd-nav-link" href="levaduras.php">Levaduras</a></li>
                      <li><a class="rd-nav-link" href="nutrientes.php">Nutrientes</a></li>
                      <li><a class="rd-nav-link" href="antiespumantes.php">Antiespumantes</a></li>
                      <li><a class="rd-nav-link" href="desarrolloT.php">Desarrollo Tecnologico</a></li>
                    </ul>
                  </li>
                  <li id="loginRegister" class="rd-nav-item"><a class="rd-nav-link" href="login.php"><span style="cursor: pointer; font-size: 19px" class="icon novi-icon icon-md mdi mdi-account"></span></a>
                  </li>
                  <li id="productosInCart" class="rd-nav-item active"><a class="rd-nav-link" href="carrito.php"><span style="font-size: 19px" class="icon novi-icon icon-sm mdi mdi-cart"></span></a>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class="section novi-background section-lg">

      <?php

      require 'vendor/autoload.php';

      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
      $dotenv->load();

      $key_encrypt = $_ENV['KEY_ENCRYPT'];
      $method_encrypt = $_ENV['METHOD_ENCRYPT'];

      if (isset($_POST['addProduct']) && !empty($_SESSION['rol'])) {
        switch ($_POST['addProduct']) {
          case 'add':
            if (is_numeric(openssl_decrypt($_POST['id'], $method_encrypt, $key_encrypt))) {
              $id_Producto = openssl_decrypt($_POST['id'], $method_encrypt, $key_encrypt);
            } else {
      ?> <p>ERROR</p> <?php
                    }
                    if (is_string(openssl_decrypt($_POST['imagen'], $method_encrypt, $key_encrypt))) {
                      $imagen_Producto = openssl_decrypt($_POST['imagen'], $method_encrypt, $key_encrypt);
                    } else {
                      ?> <p>ERROR</p> <?php
                                    }
                                    if (is_string(openssl_decrypt($_POST['nombreProducto'], $method_encrypt, $key_encrypt))) {
                                      $nom_Producto = openssl_decrypt($_POST['nombreProducto'], $method_encrypt, $key_encrypt);
                                    } else {
                                      ?> <p>ERROR</p> <?php
                                                    }
                                                    if (is_numeric(openssl_decrypt($_POST['precio'], $method_encrypt, $key_encrypt))) {
                                                      $price_Producto = openssl_decrypt($_POST['precio'], $method_encrypt, $key_encrypt);
                                                    } else {
                                                      ?> <p>ERROR</p> <?php
                                                                    }
                                                                    if (is_numeric($_POST['cantidad'])) {
                                                                      $cantidad_producto = $_POST['cantidad'];
                                                                    } else {
                                                                      ?> <p>ERROR</p> <?php
                                                                                    }

                                                                                    if (!isset($_SESSION['cart'])) {
                                                                                      $productosCarrito = array(
                                                                                        'id_Producto' => $id_Producto,
                                                                                        'imagen_Producto' => $imagen_Producto,
                                                                                        'nom_Producto' => $nom_Producto,
                                                                                        'price_Producto' => $price_Producto,
                                                                                        'cantidad_Producto' => $cantidad_producto
                                                                                      );
                                                                                      $_SESSION['cart'][0] = $productosCarrito;
                                                                                    } else {
                                                                                      $id_ProdCart = array_column($_SESSION['cart'], "id_Producto");
                                                                                      if (in_array($id_Producto, $id_ProdCart)) {
                                                                                        echo '<script>alert("¡Este producto ya se encuentra en tu carrito!");</script>';
                                                                                      } else {
                                                                                        $numeroProductos = count($_SESSION['cart']);
                                                                                        $productosCarrito = array(
                                                                                          'id_Producto' => $id_Producto,
                                                                                          'imagen_Producto' => $imagen_Producto,
                                                                                          'nom_Producto' => $nom_Producto,
                                                                                          'price_Producto' => $price_Producto,
                                                                                          'cantidad_Producto' => $cantidad_producto
                                                                                        );
                                                                                        $_SESSION['cart'][$numeroProductos] = $productosCarrito;
                                                                                      }
                                                                                    }
                                                                                    break;
                                                                                  case 'delete':
                                                                                    if (is_numeric(openssl_decrypt($_POST['id'], $method_encrypt, $key_encrypt))) {
                                                                                      $id_Producto = openssl_decrypt($_POST['id'], $method_encrypt, $key_encrypt);
                                                                                      foreach ($_SESSION['cart'] as $indice => $productosCarrito) {
                                                                                        if ($productosCarrito['id_Producto'] == $id_Producto) {
                                                                                          unset($_SESSION['cart'][$indice]);
                                                                                          $_SESSION['cart'] = array_values($_SESSION['cart']);
                                                                                          echo '
                          <script>
                          Swal.fire({
                          icon: "success",
                          title: "¡Producto eliminado del carrito!",
                          });
                          </script>';
                                                                                      ?>
                  <script>
                    console.log(<?php var_dump($_SESSION["cart"]) ?>);
                  </script><?php
                                                                                        }
                                                                                      }
                                                                                    } else {
                            ?> <p>ERROR</p> <?php
                                                                                    }
                                                                                    break;
                                                                                }
                                            ?>
        <script>
          window.onload = contadorProductos;

          function contadorProductos() {
            document.getElementById('loginRegister').innerHTML = '<li id="loginRegister" class="rd-nav-item rd-nav-link" style="cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="icon novi-icon icon-md mdi mdi-logout"></span></li>';
            document.getElementById('productosInCart').innerHTML = '<li id="productosInCart" class="rd-nav-item active"><a class="rd-nav-link" href="carrito.php"><span class="icon novi-icon icon-sm mdi mdi-cart"><?php echo (empty($_SESSION['cart'])) ? 0 : count($_SESSION['cart']); ?></span></a></li>';
          };
        </script>
      <?php
      }
      ?>

      <?php

      if ((!empty($_SESSION['cart']))) {
        $total = 0;
        $subtotalTotal = 0;
      ?>
        <div class="container" style="margin-top: 30px;">
          <div class="row mt-3">
            <div class="col">
              <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
              <br>
              <div id="carrito" class="table-responsive">
                <table class="table" id="lista-compra">
                  <thead>
                    <tr style="text-align: center;">
                      <th scope="col" style="font-weight: bold; color: black;">Imagen</th>
                      <th scope="col" style="font-weight: bold; color: black;">Producto</th>
                      <th scope="col" style="font-weight: bold; color: black;">Precio</th>
                      <th scope="col" style="font-weight: bold; color: black;">Cantidad</th>
                      <th scope="col" style="font-weight: bold; color: black;">Subtotal</th>
                      <th scope="col" style="font-weight: bold; color: black;">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: center;">
                    <?php
                    $subtotalTotal = 0;
                    foreach ($_SESSION['cart'] as $indice => $productosCarrito) {
                      $subtotalPorProducto = $productosCarrito['price_Producto'] * $productosCarrito['cantidad_Producto'];
                      $subtotalTotal += $subtotalPorProducto;
                    ?>
                      <tr>
                        <td>
                          <img src=" <?php echo $productosCarrito['imagen_Producto']; ?>" style="width: 150px; height: 150px;">
                        </td>
                        <td>
                          <?php echo $productosCarrito['nom_Producto']; ?>
                        </td>
                        <td>
                          <p id="<?php echo $productosCarrito['id_Producto']; ?>"><?php echo $productosCarrito['price_Producto']; ?></p>
                        </td>
                        <td>
                          <button type="button" id="restaProducto" style="width: 30px; height: 30px;" data-action="decrement" onclick="restarSubtotal(<?php echo $productosCarrito['price_Producto']; ?>, document.getElementById('cantidad<?php echo $productosCarrito['id_Producto']; ?>').value, 'subtotalProducto<?php echo $productosCarrito['id_Producto']; ?>')">
                            <span class="m-auto text-2xl font-thin" style="font-weight: bold; color: black;">−</span>
                          </button>
                          <input id="cantidad<?php echo $productosCarrito['id_Producto']; ?>" style="width: 50px; text-align: center;" value="<?php echo $productosCarrito['cantidad_Producto']; ?>">
                          <button type="button" id="sumaProducto" style="width: 30px; height: 30px;" data-action="increment" onclick="sumarSubtotal(<?php echo $productosCarrito['price_Producto']; ?>, document.getElementById('cantidad<?php echo $productosCarrito['id_Producto']; ?>').value, 'subtotalProducto<?php echo $productosCarrito['id_Producto']; ?>')">
                            <span class="m-auto text-2xl font-thin" style="font-weight: bold; color: black;">+</span>
                          </button>
                        </td>

                        <td>
                          <p id="subtotalProducto<?php echo $productosCarrito['id_Producto']; ?>" style="font-weight: normal;">
                            <?php echo $productosCarrito['price_Producto'] * $productosCarrito['cantidad_Producto']; ?>
                          </p>
                        </td>

                        <script>
                          function sumarSubtotal(precio, cantidad, idSubtotal) {
                            cantidad++;
                            var subtotalPorProducto = (precio * cantidad);
                            document.getElementById(idSubtotal).innerText = subtotalPorProducto.toFixed(2);
                            actualizarSubtotalTotal();
                          }

                          function restarSubtotal(precio, cantidad, idSubtotal, idSubtotalTotal) {
                            cantidad--;
                            var subtotalPorProducto = (precio * cantidad);
                            document.getElementById(idSubtotal).innerText = subtotalPorProducto.toFixed(2);
                            if (subtotalPorProducto == 0) {
                              document.getElementById(idSubtotal).innerText = precio;
                            }
                            actualizarSubtotalTotal();
                          }

                          function actualizarSubtotalTotal() {
                            var subtotales = document.querySelectorAll('[id^="subtotalProducto"]');
                            var subtotalTotal = 0;
                            var igv = 0;
                            var total = 0;

                            for (var i = 0; i < subtotales.length; i++) {
                              subtotalTotal += parseFloat(subtotales[i].innerText);
                            }

                            igv = subtotalTotal * 0.16;
                            total = subtotalTotal + igv;

                            document.getElementById("subtotalTotal").innerText = "SUBTOTAL: " + subtotalTotal.toFixed(2);
                            document.getElementById("igv").innerText = "IVA: " + igv.toFixed(2);
                            document.getElementById("total").innerText = "TOTAL: " + total.toFixed(2);
                          }
                        </script>

                        <td>
                          <form action="" method="POST">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($productosCarrito['id_Producto'], $method_encrypt, $key_encrypt); ?>">
                            <button type="submit" name="addProduct" value="delete" class="button button-primary button-winona wow button-sm me-1 mb-2" style="justify-items: center;"><i class="fas fa-trash"></i></button>
                          </form>
                        </td>
                      <?php
                      $iva = $subtotalTotal * 0.16;
                      $total = $iva + $subtotalTotal;
                    } ?>
                      </tr>
                      <tr>
                        <th colspan="6" scope="col" class="text-right" style="color: black; font-weight: bold">
                          <p id="subtotalTotal">SUBTOTAL: <?php echo $subtotalTotal; ?></p>
                        </th>
                      </tr>
                      <tr>
                        <th colspan="6" scope="col" class="text-right" style="color: black; font-weight: bold">
                          <p id="igv">IVA: <?php echo $iva; ?></p>
                        </th>
                      </tr>
                      <tr>
                        <th colspan="6" scope="col" class="text-right" style="color: black; font-weight: bold">
                          <p id="total">TOTAL: <?php echo $total; ?></p>
                        </th>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

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

        <?php
        // SDK de Mercado Pago
        require __DIR__ .  '/vendor/autoload.php';

        // Agrega credenciales
        MercadoPago\SDK::setAccessToken('TEST-206982119287016-021015-9dfa2cb10c7f40795ba8374c4ddcd9ba-698525060');

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->title = $productosCarrito['nom_Producto'];
        $item->quantity = $productosCarrito['cantidad_Producto'];
        $item->unit_price = $total;
        $preference->items = array($item);
        $preference->save();
        if (isset($_SESSION['cart'])) {
        ?>

          <div style="text-align: center;">
            <script src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $preference->id; ?>">
            </script>
          </div>

          <div>

        <?php
        }
      } else {
        echo '
          <script>
          Swal.fire({
            icon: "error",
            title: "¡No hay productos!",
            text: "Visita la sección de productos para conocer los artículos que tenemos para tu fermentación",
              }).then(function() {
                window.location = "typography.php";
            });
        </script>';
      }
        ?>

        <!-- <input type="number" onchange="calcularSubtotal(this.value);" min='1'> -->

          </div>

    </section>

    <footer class="section novi-background footer-advanced bg-gray-700">
      <div class="footer-advanced-main">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-4">
              <h5 class="font-weight-bold text-uppercase text-white">Acerca de Nosotros</h5>
              <p class="footer-advanced-text">
                ININBIO, surge de la necesidad de satisfacer la demanda del sector de las bebidas alcohólicas que busca nutrientes, levaduras e insumos para sus fermentaciones de la más alta calidad y con innovaciones en cuanto a desarrollo de fórmulas novedosas de acuerdo a sus necesidades.
              </p>
            </div>
            <div class="col-sm-7 col-md-5 col-lg-4">
              <h5 class="font-weight-bold text-uppercase text-white">Horario de Oficina</h5>
              </span>
              <p class="footer-advanced-text">
                Lunes a Viernes de 8:00 a.m. a 6:00 p.m.
              </p>
              <div style="margin-top: 20px;">
                <h5 class="font-weight-bold text-uppercase text-white">Síguenos en redes Sociales</h5>
                <ul class="foter-social-links list-inline list-inline-md" style="margin-top: 20px;">
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-facebook" href="https://www.facebook.com/ininbio"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-instagram" href="https://www.instagram.com/grupo_ininbio/"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-tiktok" href="https://www.tiktok.com/@ininbio_channel"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-youtube" href="https://www.youtube.com/channel/UCvKFK3cB9022p2tpf3OItrg"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default fa-brands fa-whatsapp" href="https:\/\/api.whatsapp.com/send?phone=5213521429098"></a></li>
                  <!-- <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li> -->
                  <!-- <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-sm-5 col-md-7 col-lg-4">
              <h5 class="font-weight-bold text-uppercase text-white">Galería de Productos</h5>
              <div class="row row-x-10" data-lightgallery="group">
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/di-phosta.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/di-phosta.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/nutri-fast.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/nutri-fast.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/nitro-ferm.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/nitro-ferm.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/vinimax.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/vinimax.png" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/productos/urea.png" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/productos/urea.png" alt="" />
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
      <div class="container">
        <hr />
      </div>
      <div class="footer-advanced-aside">
        <div class="container">
          <div class="footer-advanced-layout"><a class="brand" href="index.php"><img src="images/main-logo.png" alt="" width="115" height="34" srcset="images/main-logo.png 2x" /></a>
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="popup-whatsapp fadeIn">
      <div class="content-whatsapp -top"><button type="button" class="closePopup">
          <i class="material-icons icon-font-color">close</i>
        </button>

        <p> <img src="images\secretary.png" width="50"> Hola, ¿en qué podemos ayudarle? </p>

      </div>
      <div class="content-whatsapp -bottom">
        <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />




        <button class="send-msPopup" id="send-btn" type="button">
          <i class="material-icons icon-font-color--black">send</i>
        </button>

      </div>
    </div>
    <button type="button" id="whats-openPopup" class="whatsapp-button">
      <div class="float">
        <i class="fa fa-whatsapp my-float"></i>
      </div>
    </button>
    <div class="circle-anime"></div>
  </div>
  <script src="js\script2.js"></script>

</body>

</html>