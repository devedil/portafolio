<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,">
  <title>Concejo Municipal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../boot/swiper-bundle.min.css">
</head>

<body>

<?php
session_start();
  if (isset($_SESSION['loggedin']) && isset($_SESSION['loggedin']) == true && $_SESSION['level'] == 1) {
    echo "
    <nav class='nav'>
        <div class='nav__container'>
            <a class='nav__logo' href='../boot/index.php'>
                <img src='logo.png' alt='logo' width='70'>
            </a>

            <label for='menu' class='nav__label'>
                <img src='../boot/menu.svg' class='nav__img'>
            </label>
            <input type='checkbox' id='menu' class='nav__input'>

            <div class='nav__menu'>
                <a href='../boot/index.php' class='nav__item'>Inicio</a>
                <a href='#' class='nav__item'>Nosotros</a>
                <a href='../boot/pagoOrdenanza.php' class='nav__item'>Activar de ordenanza</a>
            </div>
            <a class='btn btn-dark btn-outline-light destroySession' href='../boot/php/logOut.php'>Cerrar Sesion</a>
        </div>
    </nav>
    
    ";
} else if(isset($_SESSION['loggedin']) && isset($_SESSION['loggedin']) == true){
    echo "
    <nav class='nav'>
        <div class='nav__container'>
            <a class='nav__logo' href='../boot/index.php'>
                <img src='logo.png' alt='logo' width='70'>
            </a>

            <label for='menu' class='nav__label'>
                <img src='../boot/menu.svg' class='nav__img'>
            </label>
            <input type='checkbox' id='menu' class='nav__input'>

            <div class='nav__menu'>
                <a href='../boot/index.php' class='nav__item'>Inicio</a>
                <a href='#' class='nav__item'>Nosotros</a>
                <a href='../boot/pagoOrdenanza.php' class='nav__item'>Solicitud de ordenanza</a>
                <a class='btn btn-dark btn-outline-light destroySession' href='../boot/php/logOut.php'>Cerrar Sesion</a>

            </div>
        </div>
    </nav>
    
    ";
} else {
    echo "
    <nav class='nav'>
        <div class='nav__container'>
            <a class='nav__logo' href='#'>
                <img src='logo.png' alt='logo' width='70'>
            </a>

            <label for='menu' class='nav__label'>
                <img src='../boot/menu.svg' class='nav__img'>
            </label>
            <input type='checkbox' id='menu' class='nav__input'>

            <div class='nav__menu'>
                <a href='index.php' class='nav__item'>Inicio</a>
                <a href='nosotros.html' class='nav__item'>Nosotros</a>
                <a href='login2.php' class='nav__item'>Iniciar sesión</a>
            </div>
        </div>
    </nav>
    
    ";
}
?>

  <!-- <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Registro</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <!--<div class="text-center">
       <img src="270214600_111889584693173_3484736526586602561_n.jpg" width="300" class="rounded">
    </div>-->
  <!--<nav class="navbar navbar-expand-lg" style="background-color: #08eff7;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Comisiones Permanentes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Economia y Hacienda</a></li>
                  <li><a class="dropdown-item" href="#">Administracion y Servicios</a></li>
                  <li><a class="dropdown-item" href="#">Asuntos Sociales</a></li>
                  <li><a class="dropdown-item" href="#">Infraestructura Equipamiento de las comunidades</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Registro</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-md navbar-light" style="background-color:#1b3039;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <img src="logo.png" alt="logo" width="90">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
       
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" class="active" href="#">Inicio
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Registro</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Comisiones Permanentes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Economia y Hacienda</a></li>
                  <li><a class="dropdown-item" href="#">Administracion y Servicios</a></li>
                  <li><a class="dropdown-item" href="#">Asuntos Sociales</a></li>
                  <li><a class="dropdown-item" href="#">Infraestructura Equipamiento de las comunidades</a></li>
                </ul>
              </li> 
              </li>
              <a href="login2.html" class="btn"><button>Iniciar Sesion</button></a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>-->
  <!--</ul>
          </div>
        </div>
      </nav>-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../boot/slider.jpg" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="../boot/Contact.png" class="d-block w-100" alt="...">
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
  <!-- <div class="comisiones swiper">
      <div class="slide-container swiper-wrapper">
        <div class="slide-content swiper-slide">
         
          <div class="card">
            <div class="image-content">
              <span class="overlay"></span>
                <div class="card-image">
                  <img src="../boot/279481795_143435188219788_8421659068112577932_n.jpg" alt="" class="card-img">
                </div>
            </div>
            <div class="card-content">
              <h2 class="name"> Asuntos Sociales</h2>
              <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            
            <button class="button">Ver mas</button>
            </div>
          
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>-->
  <main class="comisiones swiper">
    <div class="slide-container">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/carlosman.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">CARLOSMAN LEAL</h2>
              <p class="description">Comisión Permanente de Seguridad Ciudadana</p>

              <button class="button">Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/kristal.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">KRISTAL MÉNDEZ</h2>
              <p class="description">Comisión Permanente de Asuntos Sociales</p>

              <button onclick="window.location.href='../boot/asuntos.html'" class="button" >Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/jhoan.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">JHOAN SILVA</h2>
              <p class="description">Comisión Permanente de Economía y Hacienda</p>

              <button class="button">Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/luis.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">LUIS MARTÍNEZ</h2>
              <p class="description">Comisión Permanente de Infraestructura y Equipamiento de las Comunidades</p>

              <button onclick="window.location.href='../boot/infraestructura.html'" class="button" >Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/africano.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">JAVIER AFRICANO</h2>
              <p class="description">Comisión Permanente de Administración y Servicios</p>

              <button class="button">Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/salazar2.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">SEKIRIS SALAZAR</h2>
              <p class="description">Comisión Permanente de Recreación, Turismo y Deporte</p>

              <button class="button">Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/rivero.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">HIULIS RIVERO </h2>
              <p class="description">Comisión Permanente de Participación Ciudadana y de las Comunidades</p>

              <button class="button">Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/morales.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">YOLIMAR MORALES</h2>
              <p class="description">Comisión Permanente de Desarrollo Endogeno, Habitat, Ecología y Medio Ambiente</p>

              <button class="button">Ver más</button>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="../boot/dixon.png" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">DIXON RIVERA</h2>
              <p class="description">Comisión Permanente de Educación y Cultura</p>

              <button class="button">Ver más</button>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </main>
  <section class="gallery" id="portafolio">
    <div class="contenedor">
      <h2 class="subtitulo">Galeria</h2>
      <a href="#" class="items">Inicio</a>
      <a href="../boot/nosotros.html" class="items">Nosotros</a>
      <a href="login2.php" class="items">Registro</a>
    </div>
    <div class="contenedor-galeria">
      <img src="../boot/uno.jpg" alt="" class="img-galeria">
      <img src="../boot/dos.jpg" alt="" class="img-galeria">
      <img src="../boot/tres.jpg" alt="" class="img-galeria">
      <img src="../boot/cuatro.jpg" alt="" class="img-galeria">
      <img src="../boot/cinco.jpg" alt="" class="img-galeria">
      <img src="../boot/seis.jpg" alt="" class="img-galeria">
    </div>
    </div>
  </section>

  

  <section class="imagen-light">
    <img src="close.svg" alt="" class="close">
    <img src="Imagen1.jpg" alt="" class="agregar-imagen">
  </section>

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
  <!--<p class="h4">Alcaldia de Lagunillas</p>
          <span>
            <img loading="lazy" width="120" height="181" src="Imagen2.png" alt title="alcaldia de lagunillas" class="wp-image-1104">
          </span>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <p class="h5 mb-3">Contactos</p>
          <div class="mb-2">
            <a class="text-white text-decoration-none" href="https://www.facebook.com/alcaldiadelagunillas">Facebook</a>
          </div>
          <div class="mb-2">
            <a class="text-white text-decoration-none" href="https://twitter.com/alclagunillas?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a>
          </div>
          <div class="mb-2">
            <a class="text-white text-decoration-none" href="https://www.instagram.com/alcaldiadelagunillas/?hl=es">Instagram</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <p class="h5 mb-3">Teléfonos</p>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <p class="h5 mb-3">Correo</p>
        </div>   
        <div class="col-xs-12 pt-4">
        <p class="text-white text-center">Copyright - All rights reserved © 2022</p>
      </div>-->


  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="swiper-bundle.min.js"></script>
  <script src="script.js"></script>
  <script src="index.js"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>

</html>