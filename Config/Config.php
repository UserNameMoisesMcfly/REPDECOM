<?php
    //Conexion con Base de Datos 

    //Define("BASE_URL","http://localhost/Repdecom/");
    const BASE_URL="http://localhost/Repdecom/";

    //Zona horaria
    date_default_timezone_set('America/Mexico_City');

    //Datos de conexion a Base de Datos
    const DB_HOST = "localhost";
    const DB_NAME = "db_repdecom";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf8";
    
    //Delimitadores decimal y millar Ej. 24,500.00
    const SPD=".";
    const SPM=",";

    //Simbolo de Moneda
    const SMONEY="$";

?>