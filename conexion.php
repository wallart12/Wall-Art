<?php

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="WallArt";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);
    if (!$con) {
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }
    return $con;
}
?>