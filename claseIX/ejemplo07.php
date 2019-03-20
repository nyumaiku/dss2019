

<!DOCTYPE html>
<html>
<head>
	<title>INSERTANDO NOMBRES</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<h1>AGREGAR</h1>

<?php

	extract($_POST);

	if(isset($enviar)){
		echo $_FILES["fichero"]["name"];
		copy($_FILES["fichero"]["tmp_name"], "uploads/" . $_FILES["fichero"]["name"] );
	}

?>

<form method="post" enctype="multipart/form-data" action="ejemplo07.php">
	<input type="file" name="fichero">
	<input type="submit" name="enviar" value="ENVIAR">
</form>

<?php

	$link = dir("uploads/");


	$contador=0;
	while($imagen = $link->read()){

		if(!preg_match("/(.jpg|.png|.jpeg)$/", $imagen)) continue;

		if($contador==0) echo "<div class='row'>";

		$contador++;

		echo "<div class='col-4'><img src='uploads/$imagen' class='img-thumbnail'></div>";

		if($contador==3){ echo "</div>"; $contador=0; };
	}


?>


</body>
</html>