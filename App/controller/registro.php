<?php
    require("../dataAccess/Conexion.php");
    $c = new Conexion();

    if(isset($_POST["registro"])){
        $us = $_POST["user"];
        $pas = $_POST["pass"];
        $em = $_POST["email"];


        $sql = "INSERT INTO login (usuario, contraseña, email) VALUES (?,?,?)";



        try {
            $con = $c->getConexion();
            $ps= $con->prepare($sql);
            $ps->bindValue(1, $us);
            $ps->bindValue(2, $pas);
            $ps->bindValue(3, $em);
            $ps->execute();
            
            //header("Location:registro.php");
            header("Location:../../index.php?message=1");

            
        } catch (Exception $ex) {
            echo "Error";
        }
    }


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/styles.css">
    <link rel="icon" href="../../images/toothico.png">
    
    <title>DentaPixel</title>
</head>
<body class="bg-secondary">

    
   <div class="container">
        <div class="row mT">
            <div class="col-5 mx-auto">
                <form method="POST">

                <div class="card bordered">
                    <div class="card-header bg-dark text-white">Registro</div>
                    <div class="card-body bg-dark text-white">
                            
                            <div class="form-group">
                                <label for="email" class="email">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="user" class="form-label">Usuario</label>
                                <input type="text" id="user" name="user" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" id="pass" name="pass" class="form-control">
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mr-1 " name="registro">Registrar</button>
                                <a href="../../index.php" class="btn btn-success">Ingresar</a>
                            </div>
                    </div>
                </div>


                </form>
            </div>
        </div>
   </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</body>
</html>
   