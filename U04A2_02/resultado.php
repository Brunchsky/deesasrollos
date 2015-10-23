<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$datos=$_GET['dato'];
	$mascotas=$_GET['bichos'];
		echo "Nombre: ".$datos[0]."<br>";
		echo "Apellidos: ".$datos[1]."<br>";
		echo "Email: ".$datos[2]."<br>";
		foreach ($mascotas as $key => $value) {
			echo "Mascota elegida ".$key.": ".$value."<br>";
		}
	 ?>
</body>
</html>