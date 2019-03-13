<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>FUNCIONES</h1>
<?php
	
	function deducciones($nombre,$sueldo = 350){
		$isss = $sueldo*0.03;
		$afp = $sueldo*0.0625;
		$renta = $sueldo*0.1;

		echo "<hr>$nombre<br/>";
		echo "Sueldo: $sueldo<br/>";

		echo "ISSS: $isss<br/>";
		echo "afp: $afp<br/>";
		echo "renta: $renta<br/>";
		echo "Total a pagar: " . ($sueldo-$isss - $afp - $renta) ."<br/>";
	}



	deducciones("Miguel");

	deducciones("Pedro",700);
	deducciones("Joaquin",1);
?>

</body>
</html>