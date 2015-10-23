<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$mascotas = array('Jaguar sin adiestrar','Pastor suizo','Ardilla salvaje','Mantis cabreada','Lechuza','Osito de peluche');
		echo "<form action=\"resultado.php\" method=\"GET\"><select name=\"bichos[]\" size=".count($mascotas)." multiple>";
		foreach ($mascotas as $key => $value) {
			echo "<option value=\"$value\">".$value."</option>";
		}
		echo "</select><br><br>";
		$datosper = array('Nombre','Apellidos','Email');
		foreach ($datosper as $key => $value) {
			echo "<label for=\"$key\">".$value.": </label><input type=\"text\" id=\"$key\" name=\"dato[]\"><br>";
		}
		echo "<input type=\"submit\" value=\"Avanzaaa\"></form>";
		/*var_dump($_GET['bichos']);
		var_dump($_GET['dato']);*/
	?>
</body>
</html>