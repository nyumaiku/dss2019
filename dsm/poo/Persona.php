<?php

class Persona {
	public $nombre;
	public $apellido;
	public $edad;

	public function mostrar(){
		echo "$this->nombre $this->apellido $this->edad <br>";
	}
}

?>