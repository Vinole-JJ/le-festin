
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


    <table class="form-register3">
<thead>
  <tr>
    <th><h4>Registros</h4></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="controls3">   
     <?php include "resources/busqueda.php"; ?>


        <?php while  ($row= mysqli_fetch_assoc($sql_query)){
            echo "<p> Resultado de busqueda  </p>";
            echo " ";
           echo $row['#'];
           echo " ";
           echo  $row ['Nombre'];
           echo " ";
           echo $row ['Apellido'];
           echo " ";
           echo $row ['Cédula'];
           echo " ";
           echo  $row ['Mesa'];
           echo " ";
           echo  $row ['Servicio'];
           echo " ";
           echo  $row ['Plato'];
           echo " ";
           echo $row ['Cantidad'];
        }
        mysqli_free_result ($sql_query);
            ?>

</td>
  </tr>
  
</tbody>
</table>


<form class="form-register4" action="clientes.php" method="POST">
<p>Buscar Registros:</p>
        <input type="text" class="controls" name="buscador" id="buscador" placeholder="Indique C.I. del Registro">
        <input type="submit" class="boton" name="buscar" id="buscar" value="Buscar">
       
        <hr>   
        <?php include "resources/borrar.php" ?>
<form class="form-register4" action="clientes.php" method="POST">
<p>Eliminar Registros:</p>
        <input type="text" class="controls" name="elim_reg" id="elim_reg" placeholder="Indique C.I. del Registro">
        <input type="submit" class="boton" name="eliminar" id="eliminar" value="Borrar">

     <hr>  

 

    </body>

    </html>