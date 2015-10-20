<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actividades U04</title>
</head>
<body>
	<center>
	<h2>Funcion count_chars y strleng</h2>
	<form action="index.php" method="post">
		<input type="text" name="cadena"><input type="submit" value="Aceptar">
	</form>
	
	<?php 
	if ((isset($_POST['cadena']) == true) && ($_POST['cadena'] !="") && ((strlen($_POST['cadena']))<30)) {
		
		$cadena=$_POST['cadena'];
		var_dump($cadena);
		$cant=strlen($cadena);
		var_dump($cant);
		
		$letras=count_chars($cadena,3);
		$cuenta=count_chars($cadena,1);
		
		foreach ($cuenta as $i => $valor){
			echo chr($i)."=".$valor."<br>";
		}
	}
	
	?>
	<p>Introduce un texto cualquiera</p>
	</center>
</body>
</html>