<?php
include ('../conexion_be.php');

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


//Verificar que el correo no se repita en la base de datos

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
    alert("Este correo ya está registrado, ingrese uno diferente");
    window.location = "../login2.php";
    </script>
    ';
    exit();
}

//Verificar que el nombre de usuario no se repita en la base de datos

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
    alert("Este usuario ya existe, ingrese uno diferente");
    window.location = "../login2.php";
    </script>
    ';
    exit();
}

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario registrado exitosamente");
    window.location = "../login2.php";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Inténtalo de nuevo");
    window.location = "../login2.php";
    </script>
    ';

}
