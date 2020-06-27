
<?php
    require("../dataAccess/Conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../../images/toothIco.png">
    <title>DentaPixel</title>
</head>
<body class="bg-secondary">

    <div class="container">
        <div class="row my-3">
            <div class="col ">
                    <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../images/Banner.jpg" class="d-block w-100 brd" alt="DentaPixel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="container">
        <div class="row-my-1">
            <div class="col">
                <nav class="nav bg-dark brd ">
                    <a class="btn btn-primary m-2" href="registroCita.php">Agendar Cita</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-2">
            <div class="col">
                <div class="">
                    <table class="table bg-dark bordered table-hover table-dark">
                        <thead>
                            <th>Número</th>
                            <th>Paciente</th>
                            <th>Medico</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <td>Cancelar</td>
                        </thead>

                        <tbody>
                            <?php 
                                require("../controller/citas.php");
                                $citas = mostrarCitas();
                                foreach($citas as $key => $value){ ?>

                                    <tr>
                                        <td><?php echo $value[0]?></td>
                                        <td><?php echo $value[1]?></td>
                                        <td><?php echo $value[2]?></td>
                                        <td><?php echo $value[3]?></td>
                                        <td><?php echo $value[4]?></td>
                                        <td><a class="btn btn-danger" onclick="javascript:return confirm('¿Desea cancelar esta cita?');" href="../controller/eliminarCita.php?num=<?php echo $value[0]?>">Cancelar</a></td>
                                    </tr>

                        <?php   }


                            ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</body>
</html>