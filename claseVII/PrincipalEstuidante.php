<?php 

function __autoload($classname){
	require_once("classes/". $classname . ".php");
}


echo "<hr/>";
$e = new Estudiante("AB010203","Pepe","Tec en Compu");



$e->mostrarDatos();


$y = new Estudiante("CD030303","Ana","Tec en Moviles");



$y->mostrarDatos();

Estudiante::$id ++;

echo "<br>" . Estudiante::$id;

$materia = new Materia();

$materia->nombre = "PHP";
echo "<br>" . $materia->nombre;


 ?>