<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actividad 2</title>
</head>
<body>
	<center>
	<h2>Suma de vectores variables</h2>
	<?php //utilizo el codigo del primer ejercicio para ahorrar tiempo
		echo "<p>El formulario contiene " . count($_REQUEST) . " elementos</p>"; //El $_REQUEST nos cuenta el boton como dato si le ponemos name="nombre"
		
		foreach ($_REQUEST as $key => $value) {	//extraemos los valores del array y los imprimimos
			echo "El ".$key. " = ".$value."<br>";
		}

		$suma=0;	//inicializamos en cero

		foreach ($_REQUEST as $key => $value) {	//filtramos los valores del array quedándonos con los numeros
			if(filter_var($value,FILTER_VALIDATE_FLOAT)==true){ //no podemos usar el === porque el tipo que traemos es cadena y no integer
				$suma=$suma+$value;
			}
		}
		echo ("El resultado de la suma es: ".$suma);
	?>
	<form action="index.php" method="get">	<!-- Nos llevan los dos botones al mismo sitio -->
		<input type="text" name="numero"><input type="submit" value="Aceptar">
		<p>Pon cuantos elementos quieres llenar</p>
		<input type="submit" value="Enviar">
	</form>
	</center>
</body>
</html>