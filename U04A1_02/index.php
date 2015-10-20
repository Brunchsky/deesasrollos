<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actividades U04</title>
</head>
<body>
	<center>
	<h2>Suma de vectores variables</h2>
	<form action="index.php" method="get">
		<input type="text" name="numero"><input type="submit" value="Aceptar">
	</form>
	<form action="act2.php" method="get">
	<?php 
	if ((isset($_GET['numero']) == true) && ($_GET['numero'] !="")) {	//Si hemos introducido un valor creamos el formulario
		$num=$_GET['numero'];
		//echo ('<form action="index.php" method="get">');
		for ($i = 0; $i < $num; $i++) {
			echo (($i+1).'<input type="text" name=campo'.$i.'><br>');
		}
		//echo('</form>');
	}else {
		echo ("algo ha salido mal");
	}
	?>
	
	
		<p>Pon cuantos elementos quieres llenar</p>
		<input type="submit" value="Enviar">
	</form>
	
	</center>
</body>
</html>