<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ininbio/Solicitud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // require 'vendor/autoload.php';
    /* Clase Exception */

    require './PHPMailer-master/src/Exception.php';

    /* Clase principal de PHPMailer */
    require './PHPMailer-master/src/PHPMailer.php';

    /* Clase SMTP, necesaria si quieres usar SMTP */
    require './PHPMailer-master/src/SMTP.php';

    require('vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // require('vendor/autoload.php');

    // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    // $dotenv->load();

    // $host = $_ENV['HOST_EMAIL'];
    // $username = $_ENV['USERNAME_EMAIL'];
    // $password = $_ENV['PASSWORD_EMAIL'];
    // $address = $_ENV['AD_ADDRESS'];

    // $mail = new PHPMailer\PHPMailer\PHPMailer;
    // ini_set('SMTP', "smtp.gmail.com");
    // ini_set('smtp_port', "587");
    // ini_set('sendmail_from', "rafaelsanchezrodriguez10@gmail.com");

    if (isset($_POST['send'])) {
        $producto = htmlentities($_POST['producto']);
        $nombre = htmlentities($_POST['nombre']);
        $apellido = htmlentities($_POST['apellidos']);
        $empresa = htmlentities($_POST['empresa']);
        $telefono = htmlentities($_POST['telefono']);
        $correo = htmlentities($_POST['correo']);
        $filtro_correo = explode('@', $correo)[1];
        $asunto = 'Solicitud Ficha Tecnica';
        $mensaje =
            "Asunto: $asunto <br> 
        Producto: $producto <br> 
        Nombre: " . $nombre . " " . $apellido . "<br> 
        Email: $correo <br> 
        Empresa: $empresa <br>
        Telefono: $telefono <br><br><br> Mensaje:" . $_POST['mensaje'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = $_ENV['HOST_EMAIL'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['USERNAME_EMAIL'];
        $mail->Password = $_ENV['PASSWORD_EMAIL'];
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->setFrom($correo, $nombre, $apellido);
        $mail->addAddress($_ENV['AD_ADDRESS']);
        // $mail->addAddress('andrescbtis84@gmail.com');
        $mail->Subject = ($asunto);
        $mail->Body = $mensaje;

        // Respuesta Captcha

        $token = $_POST['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $_ENV['SECRET_CAPTCHA'],
            'response' => $token
        );

        $options = array(
            'http' => array (
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);

        // 

        if (substr($filtro_correo, -4) === '.com' || substr($filtro_correo, -7) === '.com.mx' || substr($filtro_correo, -3) === '.mx' || substr($filtro_correo, -4) === '.org') {
        if (!$mail->send() && !$response->success && !$response->score >= 0.5) {
            echo '
                <script>
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Ocurrió un error al enviar el correo, inténtalo nuevamente",
                });
            function redirec(){
                window.location.replace(document.referrer);
            }
             setTimeout(redirec, 2000);
        </script>';
        } else {
            echo '
            <script>
            Swal.fire(
                "¡Solicitud Exitosa!",
                "En breve obtendrá respuesta a su solicitud en su correo electrónico",
                "success"
            );
            function redirec(){
                window.location.replace(document.referrer);
              }
            setTimeout(redirec, 2000);
        </script>';
        }
    } //Cierre de filtro de dominio
    else { 
        echo '
                <script>
                Swal.fire({
                icon: "error",
                title: "¡Extensión no válida!",
                text: "Por motivos de seguridad solamente se validan correos con extensión .com, .com.mx, .mx y .org",
                });
            function redirec(){
                window.location.replace(document.referrer);
            }
             setTimeout(redirec, 3000);
        </script>';
    }
    } //Cierre de verificación de envío
    ?>
</body>
</html>