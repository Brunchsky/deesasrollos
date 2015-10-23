<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Procesamiento del formulario</title>
</head>
<body>
<center>
	<?php
	//Pasamos el array del formulario a una variable y definimos una de control
	$array = $_POST['vector'];
	$control=true;
		//Buscamos si algún valor está vacio
		for ($i=0; $i < count($array); $i++) { 
			//Si sale vacio salimos del for y cambiamos $control a false
			if (empty($array[$i])) {
				$control=false;
				break;
			}
		}
		//Resolvemos proceso según la variable de control
		if ($control==false) {
			echo "<h3>Faltan datos algo has hecho mal<br>Los datos marcados con (*) son obligatorios<br>Pulse el botón para volver al formulario de ingreso de datos</h3>";
			echo "<form action=\"index.php\"><input type=\"submit\" value=\"Volver a ingresar datos\"></form>";
		}else{
			if ($array[2]>2000) {
				echo "El sueldo de ".$array[0]." es suficiente";
			}else{
				echo "El sueldo de ".$array[0]." no es suficiente";
			}
		}
		
	?>
</center>
</body>
</html>