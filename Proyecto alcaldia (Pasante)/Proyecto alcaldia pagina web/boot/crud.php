<?php

include_once '../boot/crud.php';
$objeto = new $conexion();
$conexion = $objeto->Conectar();

//Recepcion

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$cedula = (isset($_POST['cedula'])) ? $_POST['cedula'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$numero = (isset($_POST['numero'])) ? $_POST['numero'] : '';

$consulta = "INSERT INTO pago (nombre, cedula, fecha, numero) VALUES ('$nombre', '$cedula', '$fecha', '$numero')";
$resultado = $conexion-prepare($consulta);
$resultado->execute();

$consulta = "SELECT id,nombre,cedula,fecha,numero FROM pago ORDER BY id DESC LIMIT 1";
$resultado = $conexion-prepare($consulta);
$resultado->execute();

$data=$resultado->fetchALL(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE); // enviar el array final en formato json a JS
$conexion = NULL;
