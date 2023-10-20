<?php
session_start();
?>

<h1>Bienvenido a P&aacute;gina 2 <?php echo $_SESSION["usuario"];?></h1>
<?php if(!isset($_SESSION['navegar'])) $_SESSION['navegar']=1;
       else $_SESSION['navegar']++;
?>
<h2><a href="pagina1.php?id=<?php echo session_id();?>">Visitar P&aacute;gina 1</a></h2>

<h2><a href="sesion.php?id=<?php echo session_id();?>">Volver a P&aacute;gina Principal</a></h2>

<h2>Si desea salir de su Sesi&oacute;n, <a href="cerrar.php?id=<?php echo session_id();?>">clickee aqu&iacute;</a></h2>

<h2>Nevegaic&oacute;n: <?php echo $_SESSION['navegar']; ?> </h2>