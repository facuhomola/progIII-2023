<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3 - Personas</title>
</head>
<body>

<?php

	class Persona{

		private $nombre;
		private $apellido;
		private $edad;
		private $direccion;

		public function __construct($nombre, $apellido, $edad, $direccion){
			$this -> nombre = $nombre;
			$this -> apellido = $apellido;
			$this -> edad = $edad;
			$this -> direccion = $direccion;
		}

		/*public function __construct(){
			$this -> nombre = "";
			$this -> apellido = "";
			$this -> edad = 0;
			$this -> direccion = "";
		}*/

		public function __get($propiedad){
			if (property_exists($this, $propiedad)) {
				return $this->$propiedad;
			}
		}

		public function __set($propiedad, $valor){
			if (property_exists($this, $propiedad)) {
				$this -> $propiedad = $valor;
			}
		}

		public function nombreCompleto(){
			return $this -> nombre . " " . $this->apellido;
		}


	} //Clase Padre Persona

	class Entrenador extends Persona{
		
		private $nroRegistro;
		private $antiguedad;
		private $equipo;
		private $titulos;

		public function __construct($nombre, $apellido, $edad, $direccion, $nroRegistro, $antiguedad, $equipo, $tiulos){
			parent::__construct($nombre, $apellido, $edad, $direccion);
			$this -> nroRegistro = $nroRegistro;
			$this -> antiguedad = $antiguedad;
			$this -> equipo = $equipo;
			$this -> titulos = $tiulos;
		}

        public function __get($propiedad){
			if (property_exists($this, $propiedad)) {
				return $this->$propiedad;
			}
		}

		public function __set($propiedad, $valor){
			if (property_exists($this, $propiedad)) {
				$this -> $propiedad = $valor;
			}
		}

		public function datosEntrenador(){
			echo "<b>Equipo: </b> ". $this -> equipo . "<br>" . "<b>titulos: </b>" . $this -> titulos . "<br>" .
			"<b>Antiguedad: </b>" . $this -> antiguedad;
		}

	} //Clase hija de Persona

	class Jugador extends Persona{

		private $altura;
		private $peso;
		private $equipo;
		private $goles;
		private $partidos;

		public function __construct($nombre, $apellido, $edad, $direccion, $altura, $peso, $equipo, $goles, $partidos){
			parent::__construct($nombre, $apellido, $edad, $direccion);
			$this -> altura = $altura;
			$this -> peso = $peso;
			$this -> equipo = $equipo;
			$this -> goles = $goles;
			$this -> partidos = $partidos; 
		}

        public function __get($propiedad){
			if (property_exists($this, $propiedad)) {
				return $this->$propiedad;
			}
		}

		public function __set($propiedad, $valor){
			if (property_exists($this, $propiedad)) {
				$this -> $propiedad = $valor;
			}
		}

		public function promedioGol(){
			$promedio = $this -> partidos / $this -> goles;
			return $promedio;
		}

	}

	$p1 = new Persona("Facundo", "Homola", 27, "Villa del Carmen 1640");
	$e1 = new Entrenador("Josep", "Guardiola", 47, "Ciudad de Manchester", 1234, 15, "Manchester City", 40);
	$j1 = new Jugador("Paulo", "Dybala", 28, "Italia - Roma 222", 177, 75.5, "Roma", 3, 7);

/*	echo "Datos de jugador: <br>";
	echo "<b>Nombre completo</b>: " . $j1->nombreCompleto(); echo "<br>";
	echo "<b>Edad: </b>" . $j1->__get("edad"); echo "<br>";
	echo "<b>Altura y peso: </b>" . $j1->__get("altura") . "cm" . " - " . $j1->__get("peso") . "kg"; echo "<br>";
	echo "<b>Equipo: </b>" . $j1->equipo; echo "<br> <br>";
*/
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $p10 = new Persona($nombre, $apellido, $edad, $direccion);
        echo "Datos ingresados: <br>";
        echo "Nombre completo: " . $p10->nombreCompleto() . "<br>";
        echo "Edad: " . $p10->__get("edad") . "<br>";
        echo "Dirección: " . $p10->__get("direccion");
    }
	
?>

</body>
</html>