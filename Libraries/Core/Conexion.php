<?php

    class Conexion{
        private $conect;

        public function __construct(){
            $connectionString="mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            try{
                $this->conect= new PDO($connectionString,DB_USER,DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Conexion Exitosa <br>";
            }catch(PDOException $e){
                $this->conect='Efectivamente, hubo un error de Conexion, el APP KRACHEO';
                echo "ERROR: ".$e->getMessage();
            }
        }

        public function conect(){
            return $this->conect;
        }

    }

    
?>