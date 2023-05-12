<?php
error_reporting(0);
$idOrdenanza = intval($_POST['idOrdenanza']);
if($idOrdenanza) {
    include('conexion_be.php');
    $sql="select * from pago where id = $idOrdenanza";
    $result = $conexion->query($sql);
    if($result){
        while($row=mysqli_fetch_array($result)){
            $sql="update pago set activar=1 where id = $idOrdenanza";
            $result = $conexion->query($sql);
        }
    }
}
header('Content-Type: application/json');
$data = ['paso' => '1'];

echo json_encode($data, JSON_FORCE_OBJECT);