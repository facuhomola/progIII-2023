<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
</head>
<body>

	<?php

		class Matriz { 

			//atributos
			private $matriz = array();
			private $dimension = 0;
			private $filas = 0;
			private $columnas = 0;

			//construct
			public function __construct($matriz, $filas, $columnas){
		  		$this -> matriz = $matriz;
                $this -> filas = $filas;
		  		$this -> columnas = $columnas;
		  		$this -> dimension = $filas * $columnas;
		  	}

		  	//Get y Set

		  	function __get($matriz){
				return $this->$matriz;
		  	}

		  	function __set($matriz, $valor){
				$this->$matriz=$valor;
		  	}

		  	

		  	//Metodos
		  	/*public function asignarDatos($vector){
		  		$nuevaFila = [];
                $this -> matriz = $matriz;
		  		foreach ($vector as $key => $value) {
		  			$nuevaFila = $value;
		  			$matriz[] = $nuevaFila;
		  		}
		  		return;
		  	}*/


		  	public function suma($matriz){
		  		$vector = $this->vector;
		  		$matriz3 = [];
		  		$filas_c = [];
		  		for ($i=0; $i < count($matriz); $i++) { 
		  			$filas_a = $vector[$i];
		  			$filas_b = $matriz[$i];
		  			for ($j=0; $j < count($filas_a); $j++) { 
		  				$filas_c[] = $filas_a[$j] + $filas_b[$j];
		  			}
		  			$matriz3[]=$filas_c;
		  			$filas_c = [];
		  		}
		  		return $matriz3;
		  	}



		  	/*public function producto($matriz){
		  		$vector = $this->vector;
		  		$matriz3 = [];
		  		$filas_c = [];
		  		for ($i=0; $i < count($matriz); $i++) { 
		  			$filas_a = $vector[$i];
		  			$filas_b = $matriz[$i];
		  			for ($j=0; $j < count($filas_a); $j++) { 
		  				$filas_c[] = $filas_a[$j] * $filas_b[$j];
		  			}
		  			$matriz3[]=$filas_c;
		  			$filas_c = [];
		  		}
		  		return $matriz3;
		  	}*/

		  	public function mostrar(){
		  		foreach ($this->matriz as $key => $value) {
		  			$valor = $value;
		  			echo "[";
		  			for ($i=0; $i < count($valor); $i++) { 
		  				echo "$valor[$i], ";
		  			}
		  			echo "]"; echo "<br>";
		  		}
		  		//print_r($this->vector);
		  	}

		}

		$nuevaMatriz = [[3, 2, 0], [5, 2, 1], [6, 2, 3]];
        $miMatriz = new Matriz($nuevaMatriz, 3, 3);
		//$miMatriz->asignarDatos($nuevaMatriz);
		$otraMatriz = [[1, 0, 1], [1, 2, 1], [1, 1, 0]];
		echo "<b>Matriz 1: </b> <br>"; $miMatriz->mostrar();
		//$resultadoSuma = $miMatriz->suma($otraMatriz);
		//echo "<b>Matriz 1: </b><br>"; $miMatriz->mostrar($miMatriz->vector); echo "<br>";
		//echo "<b>Matriz 2: </b><br>"; $miMatriz->mostrar($otraMatriz);
		//echo "<br>";
		//echo "<b>Resultado de sumar matrices: </b><br>"; $miMatriz->mostrar($resultadoSuma);

	?>

</body>
</html>