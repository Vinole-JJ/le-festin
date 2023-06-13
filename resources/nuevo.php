<?php
include "conexion.php";

$Nombre= $_POST['nombre'];

$Apellido= $_POST['apellido'];

$Cedula= $_POST['cedula'];

$Mesa= $_POST['mesa'];

$Servicio= $_POST['servicio'];

$Plato= $_POST['plato'];

$Cantidad= $_POST['cantidad'];

$sql_create= "INSERT INTO clientes( Nombre, Apellido, Cédula, Mesa, Servicio, Plato, Cantidad) VALUES ( '$Nombre', '$Apellido', '$Cedula', '$Mesa', '$Servicio', '$Plato', '$Cantidad')";

$comprobar=mysqli_query($conexion, "SELECT * FROM clientes WHERE Cédula = '$Cedula'");

if(mysqli_num_rows($comprobar) > 0){
	echo '<script> alert ("Proceso Invalido: Cliente Con Registro Activo"); window.history.go(-1); </script>';
	exit;
}
else{
    echo '<script> alert ("Proceso Completado"); window.history.go(-1); </script>';
}
$registrar= mysqli_query($conexion, $sql_create);
?>