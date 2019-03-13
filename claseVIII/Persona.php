<?php 

	abstract class Persona{

		public $nombre;
		public $apellido;
		public $edad;
		public $dui;

		public function __construct(){

		}

		public function mostrarDatos(){
			echo<<<DATOS
			<div><h3>DATOS</h3></div>
			<div>$this->nombre $this->apellido $this->edad $this->dui
DATOS;
		}

		final public function saludar(){
			echo "Hola estudiantes";
		}

	}

?>