<?php

	function __autoload($class){
		require_once($class.".php");
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>INSTANCIA ESTUDIANTE</title>
</head>
<body>
<?php


	$personas = array();

	$estudiante = new Estudiante;
	$estudiante->nombre = "Cristiano ";
	$estudiante->apellido = "Ronaldo";
	$estudiante->edad ="34";
	$estudiante->carnet = "CR07";
	$estudiante->carrera = "Técnico en Fútbol";
	$estudiante->dui = "01020304-5";

	$personas[] = $estudiante;
	//$estudiante->mostrarDatos();

	//$estudiante->saludar();

echo "<br>";

	$emp = new Empleado;
	$emp->nombre = "MIguel ";
	$emp->apellido = "Orellana";
	$emp->edad ="33";
	$emp->carnet = "C4365";
	$emp->carrera = "ING. SISTEMAS";
	$emp->dui = "91020304-5";
	$emp->cargo = "Docente";

	$personas[] = $emp;
	//$emp->mostrarDatos();

	//$persona = new Persona();

	foreach ($personas as  $value) {
		mostrarDatosPersonas($value);
	}

	function mostrarDatosPersonas(Persona $persona){
		$persona->mostrarDatos();
	}

?>
</body>
</html>