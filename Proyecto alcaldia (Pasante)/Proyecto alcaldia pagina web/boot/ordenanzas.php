<!doctype html>
<html>

<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1">
    <link rel="shortcut icon" href="#">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="index2.php">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</head> -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../boot/swiper-bundle.min.css">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="admin.php">
 

</head>
<body>
    <?php
    include('php/sessionController.php');
    ?>


    <div class="container">
        <div class="row">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            
            <!--<a href="reporte.php">Reporte pdf</a>-->
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cedula</th>
                                <th>Fecha</th>
                        
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('conexion_be.php');
                            $query = "SELECT * FROM pago where usuario='".$_SESSION['username']."'";
                            $result_pago = mysqli_query($conexion, $query);

                            while ($row = mysqli_fetch_array($result_pago)) {
                                if ($row['activar'] == 1) {
                                    echo "<tr>
                                    <td>" . $row['id'] . "</td>
                                    <td>" . $row['nombre'] . "</td>
                                    <td>" . $row['cedula'] . "</td>
                                    <td>" . $row['fecha'] . "</td>
                                    
                                    <td><button class='btn btn-primary btnDescargar' id=" . $row['id'] . ">Descargar</button></td>
                                    </tr>";
                                } else {
                                    continue;
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Modal para CRUD-->
        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!--jQuery, Popper.js, Bootstrap JS-->
                    <script src="jquery-3.6.3.js"></script>
                    <script src="popper/popper.min.js"></script>
                    <script src="bootstrap/js/bootstrap.min.js"></script>
                    <!---datatables JS-->
                    <script type="text/javascript" src="datatables/datatables.min.js"></script>
                    <script type="text/javascript" src="main.js"></script>
                    <script src="habilitar.js"></script>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>