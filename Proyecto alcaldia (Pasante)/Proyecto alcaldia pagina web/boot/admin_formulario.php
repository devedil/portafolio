<?php
session_start();
include("conexion_be.php");


if (isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $fecha = $_POST['fecha'];
    $numero = $_POST['numero'];
    $usuario = $_SESSION['username'];
    $tipoOrdenanzas = $_POST['tipoOrdenanzas'];
    
    $query = "INSERT INTO pago (nombre, cedula, fecha, numero, usuario, id_ordenanzas) VALUES ('$nombre', '$cedula', '$fecha', '$numero', '$usuario', $tipoOrdenanzas)";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");

    } echo '
    <script>
    alert("Enviado exitosamente");
    window.location = "../boot/pagoOrdenanza.php";
    </script>
    ';
    //header("Location: ../index2.php");
}
?>