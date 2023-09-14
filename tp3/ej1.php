<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php

		class Conjunto {
		  
		  public $arreglo = array();

		  public function __construct($arreglo){
		  	$this -> arreglo = $arreglo;
		  }

		  function __get($arreglo){
			return $this->$arreglo;
		  }

		  function __set($arreglo, $valor){
			$this->$arreglo=$valor;
		  }

		  public function interseccion($arreglo2){
		    $arreglo = $this->arreglo;
		    $n = -1;
		    $arReturn = array();
		    foreach($arreglo as $i){
		      foreach($arreglo2 as $j){
			if($i == $j){
			  $n++;
			  $arReturn[$n] = $i;
			}
		      }
		    }
		    return $arReturn;
		  }

		  public function union($arreglo2){
		    $arreglo = $this->arreglo;
		    $arReturn = array();
		    $arReturn = array_merge($arreglo, $arreglo2);
		    return $arReturn;
		  }
		  
		}

		echo '<h1>Ejercicio 1</h1>';

		$ejemplo = array(2,3,4,'hola','que onda');
		$resultado = array();

		$miAr = new Conjunto(array(4,2,6,8,3,'que onda'));
		$resultado = $miAr->interseccion($ejemplo);

		echo 'Resultado de Interseccion: ';
		print_r($resultado);

		echo '<br><br>';

		$miAr2 = new Conjunto(array(4,2,6,8,3,'vaaaamooo'));
		$resultado = $miAr2->union($ejemplo);

		echo 'Resultado de union: ';
		print_r($resultado);

	?>
</body>
</html>