<?php

include('cn.php');

$user = $_POST['user'];
$pass = $_POST['password'];

session_start();
$_SESSION['nombre'] = $user;

$consulta = "SELECT * FROM Usuario where nombre='$user' and clave='$pass' ";
$resultado = mysqli_query($conexion, $consulta); 

$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:home.php");
}else{
    ?>
    <?php
    include('login.php');
    ?>
    <h2>Error de autenticación</h2>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>