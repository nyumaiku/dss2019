<?php

	function __autoload($class){
		require_once($class.".php");
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
</head>
<body>
<?php 
	
	$pelusa = new Perro();

	$pelusa->hacerSonido();

$lorito = new Loro();
$lorito->hacerSonido();


 ?>
</body>
</html>