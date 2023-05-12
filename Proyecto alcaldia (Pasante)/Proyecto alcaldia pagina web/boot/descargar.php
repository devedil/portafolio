<?php
error_reporting(0);
$idOrdenanza = intval($_POST['idOrdenanza']);

if ($idOrdenanza) {
    include('conexion_be.php');
    $sql = "select * from pago where id = $idOrdenanza";
    $result = $conexion->query($sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tipoOrdenanza = $row['id_ordenanzas'];
        }
    }
}
header('Content-Type: application/json');
$data = ['tipo' => $tipoOrdenanza];

echo json_encode($data, JSON_FORCE_OBJECT);
