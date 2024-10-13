<?php
include("conexion.php");
$con=conectar();

$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];





$sql="INSERT INTO ids VALUES('$Correo','$Contraseña')";
$query= mysqli_query($con,$sql);
if($query){
    Header("Location: inicio de sesion.php");

}else {
}
?>