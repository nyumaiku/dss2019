<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>FUNCIONES</h1>
<?php
	 $nombre = "Amanda";
	function acceder(){
		global $nombre;
		
		echo $nombre;
	}	

	acceder();


?>

</body>
</html>