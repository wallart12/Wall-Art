<?php
include("conexion.php");
$con = conectar();

if (isset($_POST['Correo']) && isset($_POST['Contraseña'])) {
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];

    $sql = "SELECT * FROM registro WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) > 0) {
        // Si el usuario y contraseña son válidos, redirigir a la página principal
        Header("Location: inicio.html");
    } else {
        // Si el usuario y contraseña son inválidos, mostrar un mensaje de error
        Header("Location: eleccion.php");
    }
} else {
    Header("Location: .php");
}
?>