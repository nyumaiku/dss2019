<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>FUNCIONES</h1>
<?php
	
	function acceder(){
		static $contador = 0;
		$contador++;
		echo "$contador<br/>";
	}	

	acceder();
	acceder();
	acceder();
	acceder();
	//echo $contador;


?>

</body>
</html>