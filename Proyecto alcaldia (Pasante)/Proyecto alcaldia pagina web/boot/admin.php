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
  <title>Administrador</title>
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
            <button onclick="window.location.href='../boot/reporte.php'"  class="download-button">
  <div class="docs"><svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="20" width="20" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line y2="13" x2="8" y1="13" x1="16"></line><line y2="17" x2="8" y1="17" x1="16"></line><polyline points="10 9 9 9 8 9"></polyline></svg> PDF</div>
  <div class="download">
    <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="24" width="24" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line y2="3" x2="12" y1="15" x1="12"></line></svg>
  </div>
</button>
            <!--<a href="reporte.php">Reporte pdf</a>-->
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cedula</th>
                                <th>Fecha</th>
                                <th>Numero</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('conexion_be.php');
                            $query = "SELECT * FROM pago";
                            $result_pago = mysqli_query($conexion, $query);

                            while ($row = mysqli_fetch_array($result_pago)) {
                                if ($row['activar'] == 1) {
                                    continue;
                                }
                                echo "<tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['nombre'] . "</td>
                                <td>" . $row['cedula'] . "</td>
                                <td>" . $row['fecha'] . "</td>
                                <td>" . $row['numero'] . "</td>
                                <td><button class='btn btn-primary btnHabilitar' id=" . $row['id'] . ">Habilitar</button></td>
                                </tr>";
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