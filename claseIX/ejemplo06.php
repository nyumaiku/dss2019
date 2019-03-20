


<!DOCTYPE html>
<html>
<head>
	<title>INSERTANDO NOMBRES</title>
</head>
<body>
<h1>AGREGAR</h1>


<div>

	<?php
		
	$link = dir(".");

		while($resource = $link->read()){



			if(preg_match("/(.txt|.php)$/", $resource)){
				echo "<a href='visualizar.php?resource=$resource'>$resource</a><br/>";
			}else{
			echo "$resource <br/>";
			}
		}

	$link->close();
	?>

</div>

</body>
</html>