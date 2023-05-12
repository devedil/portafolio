<?php
    include_once '../conexion_be.php';
    session_start();
    $_SESSION['usuario'] = $_POST['correo'];
    $_SESSION['contraseña'] = $_POST['contrasena '];
    if($_POST){
        if($_SESSION['usuario'] && $_SESSION['contraseña']){
            $conect=mysqli_connect("localhost", "root","", "login_register_db") or die("no se ha podido connectar...");
            $sql="SELECT * FROM usuario WHERE usuario='".$_SESSION['usuario']."'";
            $result = $conect->query($sql);
            $row = $result->num_rows;

            if ($row != 0) {
                while($row = mysqli_fetch_assoc($result)){
                    $bdusuario = $row['usuario'];
                    $bdcontraseña = $row['contrasena'];
                }
                if($_SESSION['usuario'] == $bdusuario){
                    if($_SESSION['contraseña'] == $bdcontraseña){
                        header("Location: ../index.php");
                    }else{
                        header("Location: login.php");
                        echo "<div id='errorPassword'></div>";
                    }
                }else{
                    header("Location: php/login.php");
                    echo "Este usuario es incorrecto!";
                }
            } else {
                header("Location: php/login.php");
                echo is_object($row);
                echo "Este usuario no esta registrado";
            }
        }else{
            echo "Error: " . $sql . "<br>" . $conect->error;
            header("Location: php/login.php");
            echo "<div id='errorUser'></div>";
        }
    }else{
        echo "Acceso no permitido";
        exit;
    }
