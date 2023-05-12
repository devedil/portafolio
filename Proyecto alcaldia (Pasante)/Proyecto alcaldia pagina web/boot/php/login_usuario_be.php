<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include_once '../conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena='$contrasena'";
    $result = $conexion->query($sql);
    $row = $result->num_rows;

    if ($row != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['id_cargo'] == 1) {
                $_SESSION['username'] = $usuario;
                $_SESSION['password'] = $contrasena;
                $_SESSION['level'] = $row['id_cargo'];
                $_SESSION['loggedin'] = true;
                header('location: ../admin.php');
            } else {
                $_SESSION['username'] = $usuario;
                $_SESSION['password'] = $contrasena;
                $_SESSION['level'] = $row['id_cargo'];
                $_SESSION['loggedin'] = true;
                header('location: ../pagoOrdenanza.php');
            }
        } 
        } else {
            echo '<script>
            alert("Usuario y contraseña incorrectos");
            window.location = "../login2.php";
            </script>';
    }
    
}