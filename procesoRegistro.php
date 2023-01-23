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

$hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);

$consultar = "SELECT nombreUsuario FROM ininbiowebapp.usuario WHERE nombreUsuario = ?";

$sentencia = $conn->prepare($consultar);
$sentencia->bind_param('s',$_POST['nombreUsuario']);
$sentencia->execute();
$result = $sentencia->get_result();
if($result->num_rows > 0){
  echo '
        <script>
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Este usuario ya existe, inténtalo nuevamente",
        });

        function redirec(){
          location.href="register.php";
        }
            setTimeout(redirec, 2000);
        </script>';
} else {
   $sentencia->close();
   $insertar="INSERT INTO ininbiowebapp.usuario (nombre,apellidos,correo,password,nombreUsuario,telefono) VALUES (?,?,?,?,?,?)";
   $pq = $conn->prepare($insertar);
   $pq->bind_param('ssssss',$_POST['nombre'],$_POST['apellidos'],$_POST['correo'],$hashed,$_POST['nombreUsuario'],$_POST['telefono']);
   
   if($pq->execute()){
    echo '
    <script>
    
    Swal.fire(
    "¡Registro Exitoso!",
    "El usuario se registró correctamente",
    "success"
    );

        function redirec(){
          location.href="login.php";
        }
            setTimeout(redirec, 2000);
        </script>';
  $pq->close();
   }else{
    echo '
        <script>
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Ocurrió un error, inténtalo nuevamente",
        });

        function redirec(){
          location.href="register.php";
        }
            setTimeout(redirec, 2000);
        </script>';
   }
}
?>
  </body>
</html>