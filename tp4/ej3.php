<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Sistema - Gimnasio - Registros</title>
</head>
<body>

<?php

//conectar a la base de datos "gimnasio"
$conexion = mysqli_connect("localhost", "root", "", "vuelos"); //conexión a base de datos 'vuelos'

?>

<h3>Vuelos Registrados</h3>

<table border="1" class="table table-striped">
<tr>
    <td><b>Origen</b></td>
    <td><b>Destino</b></td>
    <td><b>Fecha</b></td>
    <td><b>Precio</b></td>
</tr>

<?php 

$sql="SELECT * from vuelo";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

<tr>
    <td><?php echo $mostrar['Origen'] ?></td>
    <td><?php echo $mostrar['Destino'] ?></td>
    <td><?php echo $mostrar['FechaPartida'] ?></td>
    <td><?php echo $mostrar['Precio'] ?></td>
</tr>
<?php 
}
?>
</table>


</body>
</html>