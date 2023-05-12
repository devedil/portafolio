<?php

if (!empty($_POST["btnagregar"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["img"])){ 
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $img=$_POST["img"];
        $sql=$conexion->query(" update productos set id=$id, nombre='$nombre', descripcion='$descripcion', img='$img' where id=$id");
   if ($sql==1){
    header("location:index.php");

   }else{
    echo "<div class='alert alert-danger alert-dismissible fade show'>Error al modificar
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
   }
    }else{
        echo "<div class='alert alert-danger alert-dismissible fade show'>Faltan campos por llenar
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
 }

?>