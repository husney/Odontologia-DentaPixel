<?php  
    require("../dataAccess/Conexion.php");
    $con = new Conexion();

    if($_POST){
        $paciente = $_POST["paciente"];
        $medico = $_POST["medico"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];

        $sql = "INSERT INTO citas (nombresPaciente, nombresMedico, fecha, hora) VALUES (?,?,?,?)";

       try{
            $c = $con->getConexion();
            $ps = $c->prepare($sql);
            $ps->bindValue(1, $paciente);
            $ps->bindValue(2, $medico);
            $ps->bindValue(3, $fecha);
            $ps->bindValue(4, $hora);
            $ps->execute();
            header("Location:home.php");
       }catch(Exception $ex){
            echo $ex->getMessage();
       }
    }
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
        <div class="row mT">
            <div class="col">
            <div class="card bg-dark text-white ">
                <form method="POST" class="card-body d-flex flex-wrap">
                <div class="col-6">
                <div class="form-group my-1">
                        <label for="paciente" class="form-label">Paciente</label>
                        <input type="text" id="paciente" name="paciente" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="medico" class="form-lable">Medico</label>
                        <input type="text" class="form-control" id="medico" name="medico">
                    </div>
                </div>

                <div class="col-6 ">
                <div class="form-group my-1">
                        <label for="fecha" class="form-lable">Fecha <small class="text-muted">año/mes/dia</small></label>
                        <input type="text" id="fecha" name="fecha" class="form-control ">
                    </div>

                    <div class="form-group">  
                        <label for="hora" class="form-lable">Hora <small class="text-muted">hh:mm</small></label>
                        <input type="text" class="form-control" id="hora" name="hora">
                    </div>

                </div>

                    <div class="d-flex mx-auto">
                        <button class="btn btn-success" name="registrar">Registrar Cita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</body>
</html>