<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h2>Formulario de petición de datos</h2>
	<p>Datos de Usuario Solicitados</p><br>
	<form action="process_respuesta.php" method="POST">
		<label for="nom">Nombre: </label>
		<input type="text" id="nom" name="nombre"/><br><br>
		<label for="pass">Contraseña: </label>
		<input type="text" id="pass" name="password"/><br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>