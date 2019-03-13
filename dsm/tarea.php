<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Notas de Alumnos.</title> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link href="css/Planilla.css" rel="stylesheet" type="text/css">
	</head>
<center>
	<body>
		<?php
			$notas = array(
				"Jose Hernandez" => array(
				"Parcial" => 9.1,
				"Investigación" => 8.5,
				"Tarea" => 4.8

				),        
				"Israel Hernandez" => array(
						"Parcial" => 7.1,
				"Investigación" => 6.5,
				"Tarea" => 4.8
										
				),    
				"Stephanie Oporto" => array(
				"Parcial" => 5.1,
				"Investigación" => 4.5,
				"Tarea" => 8.8
				)    
			);
		?>
		<div class="container">
			<h3 align="center">Listado de Alumnos</h3><br />
		<div class="table-responsive" style="text-align: center ;">
			<table class="table table-bordered table-hover">
  				<tr>
    				<th>Nombre</th>
    				<th>Evaluación</th>
    				<th>Nota</th>
    				<th>Porcentaje</th>
    				<th>Valor</th>
    				<th>Nota Final</th>
  				</tr>

		<?php

     		foreach($notas as $key => $value)
     		{
 				echo "<tr>";
 				echo "<td rowspan=\"3\">$key</td>";
 				foreach ($value as $key2 => $value2) 
 				{
 					$parcial = $value2*0.5;
 					$inves = $value2*0.3;
 					$tarea = $value2*0.2;
 					$final = $parcial + $inves + $tarea;

 					switch ($key2) 
 					{
 						case 'Parcial':
 							echo "<td>$key2</td>";
 							echo "<td>$value2</td>";
 							echo "<td>50 %</td>";
 							echo "<td>$parcial</td>";
 							echo "<td rowspan=\"3\">$final</td>";
 							echo "</tr>";
 							break;
 						case 'Investigación':
 							echo "<td>$key2</td>";
 							echo "<td>$value2</td>";
 							echo "<td>30 %</td>";
 							echo "<td>$inves</td>";
 							echo "</tr>";
 							break;
 						case 'Tarea':
 							echo "<td>$key2</td>";
 							echo "<td>$value2</td>";
 							echo "<td>20 %</td>";
 							echo "<td>$tarea</td>";
							echo "</tr>";
 							break;
 						
 					}
					//echo "$key2=>$value2<br/>";
 				}
			}

		?>
		
		</table>
	</div>
	</div>
	<footer class="footer">
                    <h4>Universidad Don Bosco &copy; 2019 PHP</h4>
                </div>
            </div>
        </footer>
        </center>
	</body>
</html>
