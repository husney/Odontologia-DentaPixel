<?php
    require("../dataAccess/Conexion.php");

    $con = new Conexion();

    if($_GET){
        $cita = $_GET["num"];

        $sql = "DELETE FROM citas WHERE numero = ?";

        try{
            $c = $con->getConexion();
            $ps = $c->prepare($sql);
            $ps->bindValue(1, $cita);
            $ps->execute();
            header("Location:../view/home.php?eliminado={$cita}");
        }catch(Exception $ex){

        }

    }