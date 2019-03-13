<?php

	class Estudiante{

		const UNIVERSIDAD = "Universidad Don bosco";

		public $carnet;
		public $nombre;
		public $carrera;

		public static $id = 0;

		public function __construct($carnet,$nombre,$carrera){
			echo "Se ha inicializado el objeto<br/>";
			$this->carnet = $carnet;
			$this->nombre = $nombre;
			$this->carrera = $carrera;
			self::$id++;
		}

		public function mostrarDatos(){
			echo "Estudiante " .self::$id. " $this->carnet $this->nombre $this->carrera " . self::UNIVERSIDAD ; 
		}
	}

?>