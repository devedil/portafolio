<?php
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$header = 'form: ' . $correo . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Mensaje enviao por: " . $nombre . "\r\n";
$message .= "Correo de contácto: " . $correo . "\r\n";
$message .= "Mensaje adjunto: " . $_POST['mensaje']. "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'sertocaservicios@hotmail.com';
$asunto = 'Usuario consulta';

mail($para, $asunto, utf8_decode(message), $header);

header("Location:Inicio.html");

?>