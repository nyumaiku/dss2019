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


	foreach ($personas as  $value) {
		//$value->mostrar();
	}

	echo json_encode($personas);

?>