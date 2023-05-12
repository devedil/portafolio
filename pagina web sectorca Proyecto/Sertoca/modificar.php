<?php
include "conexion.php";
$id=$_GET["id"];

$sql=$conexion->query("select * from productos where id=$id");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<form class="col-4 p-3 m-auto" method="POST">
    <h3 class="text-center text-secondary">Modificar producto</h3>
  <input type="hidden" name="id" value="<?= $_GET["id"] ?>"> 
  <?php
  include "modificar_producto.php";
while($datos=$sql->fetch_object()){
    ?>

 <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID del producto</label>
      <input type="text" class="form-control" name="id" value="<?= $datos->id ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
    </div>
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Descripción</label>
      <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Imagen</label>
      <input type="text" class="form-control" name="img" value="<?= $datos->img ?>">
    </div>

 <?php }
  ?>
   
    <button type="submit" class="btn btn-primary" name="btnagregar" value="ok">Modificar</button>
  </form>
</body>
</html>

