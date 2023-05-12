<?php
session_start();
if (!empty($_POST["ingresar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["clave"])){
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $sql=$conexionn->query("select * from usuario where usuario='$usuario' and clave='$clave'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["usuario"]=$datos->usuario;
            header("location: Index.php");
        } else {
            echo "<div class= 'alert alert-danger alert-dismissible fade show'>Acceso denegado
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }      
    }else{
       echo "<div class= 'alert alert-danger alert-dismissible fade show'>campos vacios
       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
       </div>"; 
    }

}
?>