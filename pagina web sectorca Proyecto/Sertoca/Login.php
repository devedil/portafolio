<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f6b800">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css">
    <title>SERTOCA Web</title>
  </head>
<body>
<!-- Membrete -->
  <div class="text-center">
    <img src="Media/Membrete.png" class="img-fluid" alt="membrete">
  </div>

  <!-- Menú -->
    <nav class="navbar navbar-expand-md navbar-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="Login.php">
            <img src="Media/Logo.jpg" alt="logo"width="40px">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Inicio.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SobreNosotros.html">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Catalago.php">Catálogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Servicios.html">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contactanos.html">Contáctanos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="containerprincipal">
      <form method="POST" action="">
        <div class="form-group">
        <?php
include "conexionn.php";
include "controlador.php";
?>
          <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          <input type="password" class="form-control" name="clave" placeholder="Contraseña">
        <br>
        <input class="boton" name="ingresar" type="submit" value="Ingresar">
        </div>
</form>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>