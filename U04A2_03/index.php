<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formularios y sesiones 03</title>
	<style type="text/css">
		html{
			text-align: center;
		}
		table, th, td {
	    	border: 1px solid black;
		}
	</style>
</head>
<body>
	<h2>Funciones de Usuario</h2>
	<form action="index.php" method="GET">
	<?php 
		for ($i=0; $i < 3; $i++) { 
			echo "<label for=\"precio$i\">Introduce Precio $i:</label><input type=\"text\" id=\"precio$i\" name=\"pre$i\"/><br>";
		}
	 ?>
		<input type="submit" value="Enviar" />
	</form>
	<?php
		define('dolar', 1.29710);
		define('libra', 0.807292);
		define('yen', 106.518);

		if (isset($_GET['pre0'],$_GET['pre1'],$_GET['pre2'])) {	//si existe alguna de las tres
			echo "<table><tr><th>Euros</th><th>Dólares</th><th>Libras</th><th>Yenes</th></tr>";
			foreach ($_REQUEST as $key => $value) {
				echo "<tr><td>".$value."</td><td>".sprintf("%.2f",$value*dolar)."</td><td>".sprintf("%.2f",$value*libra)."</td><td>".sprintf("%.2f",$value*yen)."</td></tr>";
			}
			echo "</table>";
		}else{
			echo "Introduce precio cualquiera";
			echo "<table><tr><th>Euros</th><th>Dólares</th><th>Libras</th><th>Yenes</th></tr></table>";

		}
	 ?>
</body>
</html>