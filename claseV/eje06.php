<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>FUNCIONES</h1>
<?php
	
	$numero = 1;



	function incrementar(&$numero){
		$numero++;
		echo $numero . "<br/>";
	}

	echo $numero . "<br/>";
	incrementar($numero);
	echo $numero . "<br/>";	

?>

</body>
</html>