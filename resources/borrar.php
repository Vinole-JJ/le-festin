<?php
include "conexion.php";
 
if(!isset($_POST['elim_reg'])){

	$_POST['elim_reg'] = " ";

	$cedulab = $_POST['elim_reg'];
}

$cedulab = $_POST['elim_reg'];



$borrar = mysqli_query($conexion, "DELETE FROM clientes WHERE Cédula = " . $cedulab);

mysqli_close($conexion);
?>