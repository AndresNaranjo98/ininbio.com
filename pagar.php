<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-8750919789569254-020211-3a8313adf7d3e8c5232251243ce114e8-359662634');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Chaqueta';
$item->quantity = 1;
$item->unit_price = 75.56;
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