<?php

    class Conexion{
        private $con = null;

        public function getConexion(){
            
            try{

               
                return $con = new PDO ("mysql:host=localhost;dbname=odontologia", "root", "");

            }catch(PDOException $ex){
                echo "Error: ".$ex->getMessage();
            }
        }
    }