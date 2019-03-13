<?php 

	include("Estudiante.php");

	$var = new Estudiante;

	$var->carnet = "MO172663";
	$var->nombre = "Rodrigo";
	$var->apellido = "Morales";

	$materias = array("DSM","RPA","DPS","DBA");

	$var->materias = $materias;

	echo json_encode($var);

 ?>