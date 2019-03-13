<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Ejemplo Sin propiedades</h1>
<?php 

include_once("sinPropiedades.php");

$obj = new sinPropiedades();
//Asignando valores a dos propiedades no definidas
$obj->nombre = "Sergio";
$obj->edad = 25;
//Hacer un volcado del objeto
//echo var_dump($obj), "\n";
//Acceder a las propiedades sobrecargadas y a otra inexistente
//echo 'Nombre: ', $obj->nombre, "\n";
//echo 'Edad: ', $obj->edad, "\n";
//echo 'Apellido: ', @$obj->apellido, "\n";
//Intentar ejecutar un método inexistente
echo $obj->darNombre('Sergio', 'Pérez', 30);


 ?>
</body>
</html>