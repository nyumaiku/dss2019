<?php

	include('Persona.php');

	$miguel = new Persona();

	$miguel->nombre = "Miguel";
	$miguel->apellido = "Orellana";
	$miguel->edad = date("19860401");

	$personas[]=$miguel;


	$persona = new Persona();

	$persona->nombre = "Ana";
	$persona->apellido = "Pineda";
	$persona->edad = date("20000112");
	$personas[]=$persona;

	$persona = new Persona();

	$persona->nombre = "Jeanette";
	$persona->apellido = "Turcios";
	$persona->edad = date("20000112");
	$personas[]=$persona;

	$persona = new Persona();

	$persona->nombre = "Juan";
	$persona->apellido = "Orellana";
	$persona->edad = date("20000112");
	$personas[]=$persona;

	$nombre_param = isset($_GET["nombre"])?$_GET["nombre"]:"";

	$resultado =  array();

	foreach ($personas as $tmp) {
		if($tmp->nombre == $nombre_param){
			$resultado[]=$tmp;
		}
	}

	echo json_encode($resultado);

?>