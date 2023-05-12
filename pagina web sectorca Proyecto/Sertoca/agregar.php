<?php
if (!empty($_POST["btnagregar"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["descripcion"])) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];

        //Direccion donde se guarda la imagen
        $dirImage = '/Applications/XAMPP/xamppfiles/htdocs/Sertoca/Media/producto/';

        //Combinacion del nombre de la imagen con la direccion de guardado
        $updateImage = $dirImage . $_FILES['img']['name'];

        $imgFileType = strtolower(pathinfo($updateImage, PATHINFO_EXTENSION));

        //Nombre de la imagen 
        $nameImgData = $_FILES['img']['name'];

        //Agrega el producto en la base de datos
        $sql = $conexion->query("insert into productos (id,nombre,descripcion,img)values($id,'$nombre','$descripcion','$nameImgData')");

        //Verifica y sube la imagen
        if ($sql == 1 && move_uploaded_file($_FILES['img']['tmp_name'], $updateImage)) {
            echo '<div class="alert alert-success alert-dismissible fade show">Item agregado
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show">Ha ocurrido un error
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show">Faltan campos por llenar
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}
