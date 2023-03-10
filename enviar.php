<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';
/* Clase Exception */
require './PHPMailer-master./src./Exception.php';

/* Clase principal de PHPMailer */
require './PHPMailer-master/src/PHPMailer.php';

/* Clase SMTP, necesaria si quieres usar SMTP */
require './PHPMailer-master/src/SMTP.php';

// $mail = new PHPMailer\PHPMailer\PHPMailer;
    // ini_set('SMTP', "smtp.gmail.com");
    // ini_set('smtp_port', "587");
    // ini_set('sendmail_from', "rafaelsanchezrodriguez10@gmail.com");

    if(isset($_POST['send'])){
        $producto = htmlentities($_POST['producto']);
        $nombre = htmlentities($_POST['nombre']);
        $apellido = htmlentities($_POST['apellidos']);
        $empresa = htmlentities($_POST['empresa']);
        $telefono = htmlentities($_POST['telefono']);
        $correo = htmlentities($_POST['correo']);
        $asunto = 'Ficha Tecnica';
        $mensaje = 
        "Asunto: $asunto <br> 
        Producto: $producto <br> 
        Nombre: ".$nombre. " ".$apellido."<br> 
        Email: $correo <br> 
        Empresa: $empresa <br>
        Telefono: $telefono <br><br><br> Mensaje:".$_POST['mensaje'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rafaelsanchezrodriguez10@gmail.com';
        $mail->Password = 'icovkukpwxmeniuf'; 
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFrom($correo, $nombre, $apellido);
        $mail->addAddress('rafaelsanchezrodriguez10@gmail.com');
        $mail->Subject = ("$email ($asunto)");
        $mail->Body = $mensaje;
        $mail->send();


        header("Location: ./index.php");
    }



    // mail('rafaelsanchezrodriguez10@gmail.com', $asunto, $mensaje)
 ?>