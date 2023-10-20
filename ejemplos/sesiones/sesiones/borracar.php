<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<?php
session_start();
// Con session_start() creamos la sesi�n si no existe o la retomamos si ya ha sido
//creada

extract($_GET);
// Como antes, usamos extract() por comodidad, pero podemos no hacerlo 
// tranquilamente
$carro = $_SESSION['carro'];

// Asignamos a la variable $carro los valores guardados en la sesi�n 

unset($carro[md5($id)]); 


// la funci�n unset borra el elemento de un array  que le 
// pasemos por par�metro. En este caso la usamos para borrar el elemento cuyo
// id le pasemos a la p�gina por la url.

$_SESSION['carro']=$carro;

// Finalmente, actualizamos la sesi�n, como hicimos cuando agregamos un
// producto y volvemos al cat�logo
if(isset($p)){
header("Location:vercarrito.php?".session_id());
}else{header("Location:catalogo.php?".session_id());
}
?>
</body>
</html>
