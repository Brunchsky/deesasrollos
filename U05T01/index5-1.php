<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>U05T01_BD_Tablas</title>
	<style type="text/css">
		label{
			text-align: right;
		}
	</style>
</head>
<body>
<?php 
	if (isset($_POST['submit'])) {
		//Volcamos los datos del formulario en las variables
		$servidor=$_POST['server'];
		$usuario=$_POST['user'];
		$password=$_POST['passw'];
		$nombrebd=$_POST['bdname'];
		//Probamos a realizar la conexión
		/*METODO 1 CON "or die"
		$conex=mysqli_connect($servidor,$usuario,$password) or die ("Imposible conectar");
		*/
		/*METODO 2*/
		if ($conex=mysqli_connect($servidor,$usuario,$password)) {
			echo "<h2>Estamos dentro</h2>";
			//comprobamos si existe la base de datos para crearla o no
			/*METODO1 CONSULTA MYSQL: "CREATE DATABASE IF NOT EXIST "DBNAME"???*/
			/*METODO2*/
			//sacamos los nombres
			$resultado=mysqli_query($conex,"SHOW DATABASES");
			//creamos variable de control
			$comprueba=0;
			//recorremos array y comprobamos nombres
			while ($row=mysqli_fetch_assoc($resultado)) {
					if ($nombrebd==$row['Database']) {
						$comprueba=1;
					}
			}//FIN DEL RECORRIDO
			if ($comprueba==0) {
					//creamos la base de datos
					if (mysqli_query("CREATE DATABASE $nombrebd CHARACTER SET utf8 COLLATE utf8_spahish_ci")) {
						echo "<h2>La base de datos $nombrebd ha sido creada</h2>";
						//creamos la tabla 'agenda2015' seleccionamos bd
						mysqli_select_db($conex,$nombrebd);



						
					} else {	//comunicamos si no se ha podido crear
						echo "<h2>No ha sido posible crear la base de datos</h2>";
					}//FIN CREACION BD
				} else {	//comunicamos que existe
					echo "<h2>La base de datos ya existe</h2>";
				}//FIN COMPROBACION
			//cerramos conexión
			if (mysql_close($conex)) {
					echo "<h2>Se ha cerrado la conexión</h2>";
				} else {	//comunicamos que no se ha cerrado
					echo "<h2>No se ha podido cerrar la conexión</h2>";
				}//FIN CIERRE CONEXIÓN
		}else{	//comunicamos que no conectamos
			echo "<h2>No se ha podido conectar con el servidor</h2>";
		}
	}//FIN ISSET SUBMIT
?>
	<div>
		<form action="index5-1.php" method="POST">
			<table>
				<tr><td style="text-align:right"><label for="bdname">Escribe Nombre de la base de Datos:</label></td><td style="text-align:left"><input type="text" id="bdname" name="bdname"></td></tr>
				<tr><td style="text-align:right"><label for="user" class="right">Escribe tu nombre de usuario:</label></td><td style="text-align:left"><input type="text" id="user" name="user"><br></td></tr>
				<tr><td style="text-align:right"><label for="passw" class="right">Elige un password:</label></td><td style="text-align:left"><input type="text" id="passw" name="passw"><br></td></tr>
				<tr><td style="text-align:right"><label for="server" class="right">Nombre del servidor:</label></td><td style="text-align:left"><input type="text" id="server" name="server"><br></td></tr>
				<tr><td style="text-align:right"><label for="coment" class="right">Elige nombres cortos<br>(No usar caracteres como . / ó \)</label></td><td style="text-align:left"><input type="submit" name="submit" value="Crear Base de Datos"></td></tr>
			</table>
		</form>
		<form action="index5-1.php">
		<table>
			<tr><td><input type="submit" value="Borrar"></td></tr>
			<tr><td><label for="erase">Restaurar Formulario</label></td></tr>
		</table>
		</form>
	</div>
</body>
</html>