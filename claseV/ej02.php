<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>ARREGLO</h1>
<?php

	$paises["El Salvador"] = array('Abreviatura' => 'SV','moneda' => 'Dolar');
	$paises["Guatemala"] = array('Abreviatura' => 'GT', 'moneda' => 'Quetzal');
	$paises["Honduras"] = array('Abreviatura' => 'HN', 'moneda' => 'Lempira');

//print_r($paises);

	foreach ($paises as $key => $value) {

		echo "<b>$key</b><br/>";
		foreach ($value as $key2 => $value2) {
			echo "$key2=>$value2<br/>";
		}
	}

?>
</body>
</html>