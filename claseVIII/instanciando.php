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

$obj->campeon = "Juventus SIuuuu";

echo $obj->campeon;
$obj->annio = 2019;

 ?>
</body>
</html>