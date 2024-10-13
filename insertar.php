<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Imagen=$_POST['Imagen']
$NIF=$_POST['NIF'];
$Fecha=$_POST['Fecha'];
$Contrasena=$_POST['Contrasena'];
$Confirmar=$_POST['Confirmar'];
$des=$_POST['des']

$sql="INSERT INTO registro VALUES('$Nombre','$Correo','$NIF','$Fecha','$Contrasena','$Confirmar','$des','$Imagen')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");

}else {
}
?>







