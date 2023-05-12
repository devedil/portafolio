<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pago</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../boot/swiper-bundle.min.css">
  <link rel="stylesheet" href="pago.css">
  <link rel="stylesheet" href="admin.php">


</head>
<?php
include('php/sessionController.php');
?>

<body>
  <div class="container-portada">
    <div class="capa-gradient"></div>
    <div class="container">
      <div class="details">
        <h1>Ingresa los datos correspondientes aquí!</h1>


      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <form action="admin_formulario.php" action="admin.php" class="formulario" id="formulario" method="POST">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
          <label for="nombre" class="formulario__label">Nombre Completo</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Maria Hernandez">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <!-- Grupo: Cedula -->
        <div class="formulario__grupo" id="grupo__cedula">
          <label for="cedula" class="formulario__label">Cedúla de Identidad</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="cedula" id="cedula">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">Coloque la cedula correctamente.</p>
        </div>


        <!-- Grupo: Fecha -->
        <div class="formulario__grupo" id="grupo__fecha">
          <label for="fecha" class="formulario__label">Fecha de Pago</label>
          <div class="formulario__grupo-input">
            <input type="date" class="formulario__input" name="fecha" id="fecha">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">Coloque la fecha correctamente.</p>
        </div>

        <!-- Grupo: Número de referencia -->
        <div class="formulario__grupo" id="grupo__numero">
          <label for="numero" class="formulario__label">Número de referencia</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="numero" id="numero">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">El numero es de maximo 14 dígitos.</p>
        </div>

        <div class="input-group mb-3">
        <label for="numero" class="formulario__label">Elija la ordenanza</label>
          <select class="form-select" name='tipoOrdenanzas' id="inputGroupSelect01">
            <option selected>Seleccionar...</option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
            <option value="4">Cuatro</option>
            <option value="5">Cinco</option>
            <option value="6">Seis</option>
          </select>
        </div>



        <!-- Grupo: Terminos y Condiciones -->
        <div class="formulario__grupo" id="grupo__terminos">
          <label class="formulario__label">
            <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
            Acepto los Terminos y Condiciones
          </label>
        </div>

        <div class="formulario__mensaje" id="formulario__mensaje">
          <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
          <button type="submit" class="formulario__btn" name="enviar">Enviar</button>
          <!--<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>-->
        </div>
      </form>
    </div>
  </div>





  <footer id="contacto">
    <div class="contenedor footer-content">
      <div class="contact-us">
        <span>
          <img loading="lazy" width="60" height="121" src="logo (2).png" alt title="concejo municipal" class="wp-image-1104">

        </span>
      </div>

      <div class="social-media">
        <a href="https://www.facebook.com/ConcejoLagunillas/" class="social-media-icon">
          <i class='bx bxl-facebook'></i>
        </a>
        <a href="https://twitter.com/concejolags" class="social-media-icon">
          <i class='bx bxl-twitter'></i>
        </a>
        <a href="https://www.instagram.com/concejolagunillas/?hl=es" class="social-media-icon">
          <i class='bx bxl-instagram'></i>
        </a>
      </div>
    </div>
    <div class="line"></div>
    <div class="copy">
      <p>COPYRIGHT © 2022 ALCALDÍA DE LAGUNILLAS. TODOS LOS DERECHOS RESERVADOS</p>
    </div>
  </footer>



  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="swiper-bundle.min.js"></script>
  <script src="jquery-3.6.3.js"></script>
  <script src="boton.js"></script>




</body>

</html>