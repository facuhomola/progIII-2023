<?php

$conexion = mysqli_connect("localhost", "root", "", "personas"); //conexión a base de datos 'personas'

if ($conexion) {
    echo "Se conecto a la base de datos <br>";
}else{
    echo "Error en la conexion <br>";
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$mail = $_POST['correo'];
$cod_postal = $_POST['localidad'];

$insertar = "INSERT INTO persona(nombre, apellido, dni, mail, cod_postal) VALUES('$nombre', '$apellido', '$dni', '$mail', '$cod_postal')";
var_dump($insertar);
if ($insertar) {
    echo "Funciono insertar <br>";
}else{
    echo "Error en insertar!";
}

?>

<h5>Datos ingresados</h5>
<p>Nombre: <?= $nombre  ?></p>
<p>Apellido: <?= $apellido  ?></p>
<p>Dni: <?= $dni  ?></p> 
<p>mail: <?= $mail  ?></p>
<p>Código postal: <?= $cod_postal  ?></p>

<?php
$consulta = mysqli_query($conexion,$insertar);

if (!$consulta) {
    die("Ocurrio un error durante la consulta");
}else{
?>  
    <h4>Se registro el usuario exitosamente</h4> 
    <a href=ingresar.php>Registrar otro usuario</a>
<?php
}
?>