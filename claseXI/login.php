
<?php
	function __autoload($class){
		include_once($class . ".php");
	}
	extract($_POST);


	if(isset($enviar)){
	$usuarios = new Usuarios();

	$usuario = $usuarios->findUser($username,$password);

	//echo $usuario[0]["role"];
	if(isset($usuario[0])){
		session_start();
		$_SESSION["username"]=$usuario[0]["username"];
		$_SESSION["role"]=$usuario[0]["role"];
		header("location: admin.php ");
	}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="login.php">
	<input type="text" placeholder="username" name="username">
	<input type="password" placeholder="password" name="password">
	<br/>
	<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>