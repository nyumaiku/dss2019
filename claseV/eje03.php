<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>ARREGLO</h1>
<?php

	$alumno = array('Marvin' => 1.7, 'Ricardo' => 1.5, 'Miguel' => 1.63,
			  'Saul' => 1.20
			  );

	foreach ($alumno as $key => $value) {
		echo "<b>$key</b></br>";
		echo "$value</br>";
	}

?>
</body>
</html>