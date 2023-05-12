<?php

include("conexion_be.php");


$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT activar FROM pago WHERE id = $id");
$row = mysqli_fetch_assoc($result);

$buttonEnabled = false;
if ($row['activar'] == 1) {
$buttonEnabled = true;
}
?>


<!--
$result = mysqli_query($conn, "SELECT activar FROM pago WHERE id = $id");
$row = mysqli_fetch_assoc($result);


$buttonEnabled=null;
if($row['activar']==1){
   $buttonEnabled=true;
}else{
   $buttonEnabled=false;
}


<div style="text-align: center;">
    <button  onclick="window.location.href='../boot/ordenanzas.html'" class="buttonn" id="submit" <?php if (!$buttonEnabled) echo 'disabled="disabled"'; ?>>
        Click aquí
    </button>
</div>
