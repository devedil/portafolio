<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$documento = $_POST['documento'];
$tlf = $_POST['tlf'];
$correos = $_POST['correos'];
$servicio = $_POST['servicio'];
$mensaje = $_POST['mensaje'];

$header = 'form: ' . $correo . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Mensaje enviao por: " . $nombres . $apellidos . "\r\n";
$message .= "ID: " . $documento . "\r\n";
$message .= "Correo de contácto: " . $correo . " Tlf: " . $tlf . "\r\n";
$message .= "Tipo de servicio: " . $_POST['servicio']. "\r\n";
$message .= "Mensaje adjunto: " . $_POST['mensaje']. "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'sertocaservicios@hotmail.com';
$asunto = 'Solicitud de Servicio';

mail($para, $asunto, utf8_decode(message), $header);

header("Location:Inicio.html");

?>