<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>

	<?php

		abstract class Geometria{

			private $perimetro;
			private $area;

			abstract public function dibujable();
			abstract public function calculcaArea();
			abstract public function calculaPerimetro();


		}//clase abstracta padre

		class Rectangulo extends Geometria{
			private $perimetro;
			private $area;
			private $altura;
			private $base;

			public function asignarValores($valor1, $valor2){
				$this->altura = $valor1;
				$this->base = $valor2;
			}

			public function calculcaArea(){
				$area = $this->base * $this->altura;
				return $area;
			}

			public function calculaPerimetro(){
				$perimetro = $this->base + $this->altura;
				return $perimetro;
			}

			public function dibujable(){
				echo "<b>Dibuja un rectangulo</b>";
			}

		}//Clase hija

		class Circulo extends Geometria{

			private $perimetro;
			private $area;
			private $radio;
			private $diametro;
			private $pi = 3.141592;
			//define("pi", "3.141592");

			public function asignarRadioDiametro($rad, $dia){
				$this->radio = $rad;
				$this->diametro = $dia;
			}

			public function calculcaArea(){
				$area = $this->pi * pow($this->radio, 2);
				return $area;
			}

			public function calculaPerimetro(){
				$perimetro = $this->pi * $this->diametro;
				return $perimetro;
			}

			public function dibujable(){
				echo "<b>Dibuja un circulo</b>";
			}			

		}

		$figura1 = new Rectangulo();
		$figura2 = new Circulo();

		$figura1->asignarValores(12, 5);
		$figura1->dibujable(); echo "<br>";
		echo "El area del rectangulo es: " . $figura1->calculcaArea() . "<br>";
		echo "El perimetro del rectangulo es: " . $figura1->calculaPerimetro(); echo "<br> <br>";

		$figura2->asignarRadioDiametro(5, 10);
		$figura2->dibujable(); echo "<br>";
		echo "El área del circulo es: " . $figura2->calculcaArea() . "<br>";
		echo "El perimetro del circulo es: " . $figura2->calculaPerimetro();

	?>

</body>
</html>