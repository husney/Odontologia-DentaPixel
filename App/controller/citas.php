<?php

    $con = new Conexion();

    $sql = "SELECT numero, nombresPaciente, nombresMedico, fecha, hora FROM citas";

    function mostrarCitas(){
        global $con, $sql;
        try{
            $c = $con->getConexion();
            $ps = $c->prepare($sql);
            $ps->execute();
            return  $rs = $ps->fetchAll();
            
        }catch(Exception $ex){
    
        }
    }