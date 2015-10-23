<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actividades U04</title>
</head>
<body>
	<center>
	<h2>Función count_chars y strlen</h2>
	<!-- Primer formulario al entrar -->
	<form action="index.php" method="GET">	
		<label for="string">Introduce la cadena: </label>
		<input type="text" id="string" name="cadena" size="30">
		<input type="submit" value="Aceptar">
	</form><br><br>
	<!-- Modificamos el comportamiento de la página al entrar o no con $_GET -->
	<?php
		//Comprobamos la existencia de $_GET
		if (isset($_GET['cadena'])){
			//Convierte utf8 a iso-8859-1
			$txt=utf8_decode($_GET['cadena']);
		}else{
			//No existe
			$txt=0;
		}
		$texto1="Introduce un número cualquiera<br>";
		$texto2="Gracias<br>";
		//string "0" se considera empty = true
		echo (empty($txt))?$texto1:$texto2;
		$cadena=$txt;
		//devuelve array como letra as indice y repeticiones as valor ordenados segun ASCII
		$cuenta=count_chars($cadena,1);
		//devuelve string con valores únicos y ordenados segun ASCII
		$letras=count_chars($cadena,3);
		echo "<h4>Cadena: ".utf8_encode($cadena)."</h4>";
		echo "<table border=\"1\"><tr><th>Carácter</th><th>Frecuencia</th></tr>";

		for ($i=0; $i < strlen($letras); $i++) {
			/*Una cadena se puede tratar como un array de letras y sacar valores según indice ($letras[$i])
			ord devuelve el valor ASCII de una cadena*/
			echo "<tr><td>".utf8_encode($letras[$i])."</td><td>".$cuenta[ord($letras[$i])]."</td></tr>";
		}
		echo "</table>";
	?>
	</center>
</body>
</html>