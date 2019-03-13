<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>FUNCIONES</h1>
<?php

	function comparar($valor1,$valor2){
		if($valor1>$valor2){
			return $valor1;
		}elseif($valor2>$valor1){
			return $valor2;
		}else{
			return $valor1;
		}
	}


?>


<h1><?= comparar(93,93) ?></h1>
<h1><?= comparar(92,91) ?></h1>


<?php
	extract($_GET);
	$numero1 = isset($numero1)?$numero1:0;
	$numero2 = isset($numero2)?$numero2:0;
?>

<h1><?= comparar($numero1,$numero2) ?></h1>

</body>
</html>