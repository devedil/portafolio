<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!$_SESSION['username']) {
    header("Location: ../boot/index.php");
}
if (isset($_SESSION['username'])) {
    $_SESSION['loggedin'];
}
if (isset($_SESSION['expire'])) {
    $inactive = 1200;
    $sessionTime = time() - $_SESSION['expire'];
    if ($sessionTime > $inactive) {
        session_unset();
        session_destroy();
        header("Location: ../boot/index.php");
    } else {
        $_SESSION['expire'] = time();
    }
} else {
    $_SESSION['expire'] = time();
}

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
                <a href='../boot/ordenanzas.html' class='nav__item'>Activar ordenanza</a>
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
                <a href='../boot/nosotros.html' class='nav__item'>Nosotros</a>
                <a href='../boot/ordenanzas.php' class='nav__item'>Solicitud de Ordenanzas</a>
                
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
                <a href='../' class='nav__item'>Inicio</a>
                <a href='#' class='nav__item'>Nosotros</a>
                <a href='../login2.php' class='nav__item'>Iniciar sesion</a>
            </div>
        </div>
    </nav>
    
    ";
}
