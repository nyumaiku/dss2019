<?php 

final class Estudiante extends Persona{
	public $carnet;
	public $carrera;

		public function mostrarDatos(){
			echo<<<DATOS
			<div><h3>DATOS</h3></div>
			<div>$this->nombre $this->apellido $this->edad $this->dui $this->carnet $this->carrera
DATOS;
		}

}


 ?>