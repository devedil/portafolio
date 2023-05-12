<?php
error_reporting(E_ALL);
include("conexion.php");

//$conexion=mysqli_connect("localhost", "root","","Sertoca") or die("no se ha podido connectar...");

$sql="SELECT * FROM productos";
$result = $conexion->query($sql);

        while (($row=mysqli_fetch_array($result)))   {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $img = $row['img'];
            echo"
            <div class='row row-cols-1 row-cols-md-2 g-4'>
            <div class='col mt-5'>
                <div class='card h-100' style='width: 200px'>
                    <img src='Media/producto/$img' class='card-img-top' alt='Imagen de producto'>
                <div class='card-body'>
                    <p class='card-text'>".$row['id']."</p>
                    <h5 class='card-title'> $nombre </h5>
                    <p class='card-text'>$descripcion </p>
                </div>
            </div>
            </div>
            </div>";  
        }
    
error_reporting(E_ALL);
mysqli_free_result($result);
?>
