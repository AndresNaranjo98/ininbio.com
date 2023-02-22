<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-8750919789569254-020211-3a8313adf7d3e8c5232251243ce114e8-359662634');
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
                                                                        }
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $productosCarrito['nom_Producto'];
$item->quantity = $productosCarrito['cantidad_Producto'];
$item->unit_price = $total;
$preference->items = array($item);
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="insertarCompra.php" method="POST">
    <script src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $preference->id; ?>">
    </script>
  </form>

</body>

</html>