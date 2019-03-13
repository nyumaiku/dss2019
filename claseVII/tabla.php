<!DOCTYPE html>
<html>
<head>
	<title>HOLA</title>
	<link rel="stylesheet" type="text/css" href="DataTables/jquery.datatables.min.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>

 
<script type="text/javascript" src="DataTables/jquery.datatables.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
    $('#tabla').DataTable();
});
</script>

</head>
<body>
<div class="jumbotron">
	<div class="display-3">
    	<h1>Ejemplo de tabla</h1> 
	</div>
	
</div>
<div class="row">
<div class="col-8 offset-2">
<table class="table" id="tabla">
	<thead>
		<tr>
			<th>Code</th>
			<th>Description</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		

<?php

$products = array(array('Code' => 'TIR', 
                        'Description' => 'Llantas',
                        'Price' => 42),
                  array('Code' => 'OIL',
                        'Description' => 'Aceite',
                        'Price' => 4.25 ),
                  array('Code' => 'WAX',
                        'Description' => 'Cera',
                        'Price' => 2.50)
            );





foreach ($products as $key => $value) {
	echo "<tr>";
	foreach ($value as $desc => $content) {
		echo "<td>$content</td>";
	}
	echo "</tr>";
}

?>
	</tbody>
</table>
</div>
</div>

</body>
</html>

