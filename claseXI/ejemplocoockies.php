<?php 

if(!isset($_COOKIE["contador"])){
	$contador=0;
}else{
	$contador = $_COOKIE["contador"];
	$contador++;
}


setcookie("contador",$contador);



echo "visitas " . $contador;


 ?>