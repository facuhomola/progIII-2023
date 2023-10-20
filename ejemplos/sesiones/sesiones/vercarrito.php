<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<?php 
session_start();
// Iniciamos o retomamos la sesi�n
if (isset($_SESSION['carro']))   $carro=$_SESSION['carro'];
    else $carro=false;

// La asignamos a la variable $carro si existe o ponemos a false $carro en caso
// contrario 

?>
<html> <head>
<title>PRODUCTOS AGREGADOS AL CARRITO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.tit {
    font-family: Verdana, Arial, Helvetica, sans-serif;   font-size: 9px;
    color: #FFFFFF;
}
.prod {
    font-family: Verdana, Arial, Helvetica, sans-serif;  font-size: 9px;
    color: #333333;
}
h1 {
    font-family: Verdana, Arial, Helvetica, sans-serif;  font-size: 20px;
    color: #990000;
}
-->
</style>
</head>
<body>
<h1 align="center">Carrito</h1>
<?php 
If ($carro){
// si el carro no est� vac�o, mostramos los productos 
?>
<table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
<tr bgcolor="#333333" class="tit"> 
<td width="105">Producto</td>
<td width="207">Precio</td>
<td colspan="2" align="center">Cantidad de Unidades</td>
<td width="100" align="center">Borrar</td>
<td width="159" align="center">Actualizar</td>
</tr>
<?php
$color = array("#ffffff","#F0F0F0");
$contador = 0;

// Las 2 líneas anteriores sirven sólo para hacer una tabla con colores alternos.
// Antes de recorrer todos los valores de la matriz $carro, ponemos a cero la
// variable $suma, en la que iremos sumando los subtotales del costo de cada 
// Ítem por la cantidad de unidades que se especifiquen.
$suma=0;
foreach ($carro as $k => $v){

// Recorremos la matriz que tiene todos los valores del carro,  calculamos el 
// subtotal y el total 

$subto = $v['cantidad']*$v['precio'];
$suma = $suma+$subto;
$contador++;

// este es el contador que usamos para los colores alternos 

?>
<form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?sid=<?php echo session_id() ?>&p=1" id="a<?php echo $v['identificador'] ?>">
<tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
<td><?php echo $v['producto'] ?></td> <td><?php echo $v['precio'] ?></td>
<td width="43" align="center"><?php echo $v['cantidad'] ?></td>
<td width="136" align="center"> 
<input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
<input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
<td align="center">
<a href="borracar.php?<?php echo session_id() ?>&id=<?php echo $v['id'] ?>&p=1">
<img src="trash.gif" width="12" height="14" border="0"></a></td>
<td align="center"> 
<input name="imageField" type="image" src="actualizar.gif" width="20" height="20" border="0"></td>
</tr></form>

<?php
// por cada item creamos un formulario que submite a agregar producto y un link
// que permite eliminarlos 
}?> 
</table>
<div align="center"><span class="prod">Total de Art&iacute;culos: <?php echo count($carro);
// El total de �tems va a ser igual a la cantidad de elementos que tenga la matriz
// $carro, valor que obtenemos con la funci�n count o con sizeof 
?>
</span></div><br>
<div align="center"><span class="prod">Total: $<?php echo number_format($suma,2);
// Mostramos el total de la variable $suma formate�ndola a 2 decimales 
?>
</span></div><br>
<div align="center"><span class="prod">Continuar la selecci&oacute;n de productos</span> 
<a href="catalogo.php?<?php echo session_id();?>">
<img src="continuar.gif" width="13" height="13" border="0"></a> 
</div>
<?php }else{ ?>
<p align="center"> <span class="prod">No hay productos seleccionados</span>
<a href="catalogo.php?<?php echo session_id();?>">
<img src="continuar.gif" width="13" height="13" border="0"></a> 
</p>
<?php }?>
</body>
</html>
