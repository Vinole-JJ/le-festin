<?php
include "conexion.php";

if(!isset($_POST['buscador'])){

	$_POST['buscador'] = " ";

	$busqueda= $_POST['buscador'];
}

$busqueda = $_POST['buscador'];

$leer = "SELECT * FROM clientes WHERE Cédula LIKE '%".$busqueda."%'";

$sql_query = mysqli_query($conexion, $leer);


?>