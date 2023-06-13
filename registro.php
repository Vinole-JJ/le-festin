<?php
include "resources/conexion.php";
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le'Festin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="factura.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="icon" type="image/gif" href="icono.png" sizes="36x36">
</head>

<body>

<div class="navbar">
        <img class= logo src="logolargo.png">
              <ul class="button" id=”button”>
            <li><a href="index.html">Lobby</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="clientes.php">Gestionar Cliente</a></li>
        </ul>
    </div>
    <div class="frase">
        <ul class="frase_texto"></ul>
            <div class="frase_texto">La buena comida es como la música, sólo hay que quedarse atento y apreciar los sabores.</div>
        </ul>
    </div>

    <br>
    <table class="form-register3">
<thead>
  <tr>
    <th><h4>Registros</h4></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="controls3">    
<?php
$registros = "SELECT * FROM clientes ";

$query = mysqli_query($conexion, $registros);

if($registros->errno) die($registros->error);

while($fila = $query->fetch_assoc()) {
    echo "ID: " . $fila['#'] . ", Nombre: " . $fila['Nombre'] . ", Apellido: " . $fila['Apellido'] . ", Cédula: " . $fila['Cédula'] . ", Mesa: " . $fila['Mesa'] . ", Servicio: " . $fila['Servicio'] .  ", Plato: " . $fila['Plato'] .  ", Cantidad: " . $fila['Cantidad'] . "<br>";
}

$query->free();
?>
</td>
  </tr>
  
</tbody>
</table>

</body>
</html>