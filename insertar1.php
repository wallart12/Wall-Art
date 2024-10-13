<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Imagen=$_POST['Imagen']
$fecha=$_POST['fecha'];
$edad=$_POST['edad'];
$TI=$_POST['TI'];
$Nit=$_POST['Nit'];
$Contraseña=$_POST['Contraseña'];
$Confirmar=$_POST['Confirmar'];
$des=$_POST['des']


$sql="INSERT INTO diseñador VALUES('$Nombre','$Correo','$fecha','$edad','$TI','$Nit','$Contraseña','$Confirmar','$des','$Imagen')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro1.php");

}else {
}
?>