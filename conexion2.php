<?php
    $host = 'localhost';
    $user = 'root';
    $pass = "";
    $bd = "winnfed_bk";

    $conection = @mysqli_connect($host,$user,$pass,$bd);
    if(!$conection){
        echo "Error de conexion";
    }

?>