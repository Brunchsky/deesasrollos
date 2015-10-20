<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actividad 1</title>
</head>
<body>
	<center>
	
	<?php
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
	<form action="act1.php" method="post"> <!-- Cuando haya tiempo probar con un include desde la primera página para no tener que repetir lineas -->
		<span>Dato1</span><input type="text" name="Dato1"><br>
		<span>Dato2</span><input type="text" name="Dato2"><br>
		<span>Dato3</span><input type="text" name="Dato3"><br>
		<span>Dato4</span><input type="text" name="Dato4"><br>
		<span>Dato5</span><input type="text" name="Dato5"><br>
		<span>Dato6</span><input type="text" name="Dato6"><br>
		<span>Dato7</span><input type="text" name="Dato7"><br>
		<span>Dato8</span><input type="text" name="Dato8"><br>
		<input type="submit">
	</form>
	</center>
</body>
</html>