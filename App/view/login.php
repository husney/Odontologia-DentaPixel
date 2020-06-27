<?php
    //require("../dataAccess/Conexion.php");
    $con = new Conexion();
    
    if($_POST){
        $usr = $_POST["user"];
        $pas = $_POST["pass"];

        $sql = "SELECT usuario, contraseña FROM login WHERE usuario = ? AND contraseña = ?";

        try{ 
            $c = $con->getConexion();
            $ps = $c->prepare($sql);
            $ps->bindValue(1, $usr);
            $ps->bindValue(2, $pas);
            $ps->execute();
            $rs = $ps->fetch(PDO::FETCH_ASSOC);
            print_r($rs);

            if($usr!= null && $pas != null){
                if($rs["usuario"] == $usr && $rs["contraseña"] == $pas){
                    header("Location:App/view/home.php");
                }else{
                    header("Location:index.php");
                }
            }
            

        }catch(Exception $ex){
            echo "error";
        }
    }
?>

<div class="log ">
<div class="row  my-auto">
    <div class="col-4 mx-auto">
        <div class="">
            <div class="card mT bg-dark text-white">
                <div class="card-header text-center h1 w-100">Login</div>
                <div class="card-body">
                    <form action="" method="POST">
                        
                        <div class="form-group w-100">
                            <label for="user" class="form-label">Usuario</label>
                            <input type="text" id="user" class="form-control" name="user">
                        </div>

                        <div class="form-group w-100">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" name="pass" id="pass" class="form-control">
                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary mr-1 " name="ingreso">Ingresar</button>
                            <a href="App/controller/registro.php" class="btn btn-success">Registrar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>