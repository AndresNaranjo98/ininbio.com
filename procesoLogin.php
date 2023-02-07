<?php
session_start();
if(isset($_SESSION['rol'])){
  header('index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php

include('./conexionBD/connection.php');

require('vendor/autoload.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$key = $_ENV['KEY_JWT'];
$now = strtotime("now");

$consultaLogin = "SELECT nombreUsuario, password, idRol FROM usuario WHERE nombreUsuario = ?";
$sentencia = $conn->prepare($consultaLogin);
$sentencia->bind_param('s',$_POST['nombreUsuario']);
$sentencia->execute();
$result = $sentencia->get_result();

if($result->num_rows > 0){

$datosUsuario = $result->fetch_assoc();

if(password_verify($_POST['password'], $datosUsuario['password'])){

    $payload = [
        'exp' => $now + 3600,
        'data' => '1'
    ];

    $jwt = JWT::encode($payload, $key, 'HS256');

    http_response_code(200);
    $credenciales = array('token'=>$jwt, 'usuario'=>$datosUsuario['nombreUsuario'], 'rol'=>$datosUsuario['idRol']);
    $rol = $datosUsuario['idRol'];
    $_SESSION['rol']=$rol;

?>
    <script>
    
    localStorage.setItem('token', '<?php echo $credenciales['token']?>');
    localStorage.setItem('usuario', '<?php echo $credenciales['usuario']?>');

    Swal.fire(
    "¡Inicio de Sesión exitoso!",
    "Bienvenido <?php print_r($datosUsuario['nombreUsuario'])?>",
    "success"
    );

        function redirec(){
          location.href="index.php";
        }
            setTimeout(redirec, 3000);
        </script>;
<?php

} else{
?>
    <script>
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Contraseña incorrecta, inténtalo nuevamente",
    });

    function redirec(){
      location.href="login.php";
    }
        setTimeout(redirec, 3000);
    </script>;
<?php    
}
} else{
?>
    <script>
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Usuario no registrado, inténtalo nuevamente",
    });

    function redirec(){
      location.href="register.php";
    }
        setTimeout(redirec, 3000);
    </script>;
<?php
}
?>

</body>
</html>
