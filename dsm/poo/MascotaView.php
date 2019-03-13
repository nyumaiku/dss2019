<?php

	include("Mascota.php");
	include("Persona.php");

	$mascota = new Mascota();

	$mascota->nombre = "Canela";

	$duenio = new Persona();
	$duenio->nombre = "Miguel";
	$duenio->apellido = "Orellana";
	$duenio->edad = 32;

	$mascota->duenio = $duenio;

	echo json_encode($mascota);



?>