<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>

	<?php

		interface dibujable{
			public function setPosition($x, $y);
			public function dibujar();
		}

		abstract class Geometria implements dibujable{

			private $perimetro;
			private $area;

			//abstract public function dibujable();
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

			public function setPosition($x, $y){
				echo "Plano x: $x -- Plano y: $y";
			}

			public function dibujar(){
				echo "Dibujando rectangulo...";
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

			public function setPosition($x, $y){
				echo "Plano x: $x -- Plano y: $y";
			}

			public function dibujar(){
				echo "Dibujando circulo...";
			}

		}

		$figura1 = new Rectangulo();
		$figura2 = new Circulo();

		$figura1->setPosition(5, 10); echo "<br>";
		$figura1->dibujar();


	?>

</body>
</html>