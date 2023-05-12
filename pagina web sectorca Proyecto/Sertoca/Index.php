<?php
session_start();
if (empty($_SESSION["usuario"])){
  header("location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f6b800">
    <script src="https://kit.fontawesome.com/225897e024.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Index.css">
    <title>SERTOCA Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<!-- Membrete -->
  <div class="text-center">
    <img src="Media/Membrete.png" class="img-fluid" alt="membrete">
  </div>

<!-- Menú -->
<nav class="navbar navbar-expand-md navbar-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="Media/Logo.jpg" alt="logo"width="40px">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="controlador2.php">Volver a la vista de Cliente</a>
            </ul>
          </div>
        </div>
      </nav>


<script>
function eliminar(){
  var respuesta=confirm("¿Seguro que deseas eliminar?");
  return respuesta
}
  </script>
<?php
include "conexion.php";
include "eliminar.php"; 
?>
<div class="container-fluid row">
  <form class="col-4 p-3" method="POST" enctype="multipart/form-data">
    <h3 class="text-center text-secondary">Añadir producto</h3>
    <?php
    include "agregar.php";
    ?>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID</label>
      <input type="text" class="form-control" name="id">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Descripción</label>
      <input type="text" class="form-control" name="descripcion">
    </div>
    <div class="mb-3">
  <label for="formFile" class="form-label">Imagen</label>
  <input class="form-control" type="file" id="formFile"  name="img" accept="image/png, .jpeg., .jpg, image/gif">
</div>
    
    <button type="submit" class="btn btn-primary" name="btnagregar" value="ok">Agregar</button>
  </form>

  <div class="col-8 p-4">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">descripcion</th>
          <th scope="col">img</th>
        </tr>
      </thead>
      <tbody>
        
        <?php
        include "conexion.php";
        $sql=$conexion->query("select * from productos");
        while($datos=$sql->fetch_object()){ ?>
        <tr>
          <td><?= $datos->id?></td>
          <td><?= $datos->nombre?></td>
          <td><?= $datos->descripcion?></td>
          <td><?= $datos->img?></td>
          <td>
            <a href="modificar.php?id=<?= $datos->id ?>" class="btn btn-small btn-outline-warning"><i class="fa-solid fa-pen"></i></a>
            <a onclick="return eliminar()" href="Index.php?id=<?= $datos->id ?>" class="btn btn-small btn-outline-danger"><i class="fa-solid fa-eraser"></i></a>
          </td>
        </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>
