<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de ingreso de datos</title>
	<style type="text/css">
		body{
			display:block;
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>Formulario de Ingreso de Datos</h2>
	
	<form action="phpproceso.php" method="POST">
	<?php
		$label = array('(*)Nombre','(*)DNI','Sueldo');
		for ($i=0; $i < 3; $i++) { 
			echo("<label for=\"dato$i\">$label[$i]: </label><input type=\"text\" id=\"dato$i\" name=\"vector[]\"><br> ");
		}
		echo "<h3>Los datos marcados con (*) son obligatorios</h3>";
		echo "<input type=\"submit\" value=\"Ingresar Datos\"/>";
	?>
	</form>
	
</body>
</html>