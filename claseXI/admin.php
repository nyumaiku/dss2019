<?php


session_start();

if(!$_SESSION["username"]){
	header("location: login.php");
}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>BIENVENIDO <?= $_SESSION["username"] ?></h1>
	<?php

		if($_SESSION["role"]=="admin"){
			echo "<h2>TU ERES ADMINISTRADOR PUEDES HACER TODO</h2>";
		}else{
			echo "<h2>TU ERES USUARIO NO PUEDES HACER TODO</h2>";
		}

	?>
	<a href="logout.php">SALIR</a>

</body>
</html>