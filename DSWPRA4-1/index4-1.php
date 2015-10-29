<?php
//Comenzamos la sesion
session_start();
		//Si venimos del link eliminar
		if (isset($_GET['delete'])) {
			unset($_COOKIE['contador']);	//con el unset podemos entrar al siguiente if
			//setcookie("contador","",time()-4200);
		}
		//comprobamos si existe la cookie contador si no existe, la creamos:si existe le sumamos 1
		if (!isset($_COOKIE['contador'])) {
			$numero=1;
			setcookie("contador",$numero,time()+2592000);
			//$_COOKIE[session_name] tiene como valor el id de sesión se crea en esta vuelta pero no podemos extraer su valor
			$mensaje="Bienvenido, es la primera vez que accedes a nuestra web";
		}else{
			//No se si hay otra manera de sumarle una vuelta sin usar el setcookie
			$numero=$_COOKIE['contador']+1;
			setcookie("contador",$numero,time()+2592000);
			$mensaje="Has accedido ".$numero." a nuestra web";
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Autentificación PHP</h1> 
	<!-- Formulario de acceso de datos con 2 opciones -->
	<form action="resp4-1.php" method="POST">
		<table width="225" cellspacing="2" cellpadding="2" border="0"> 
			<tr><td colspan="2" align="center" 
			<?php 
				//opcion1 venimos de la página resp4-1 con los datos rechazados y el error producido
				if (isset($_GET["error"])){
			?> bgcolor=red><span style="color:ffffff"><b>Datos incorrectos <?php echo $_GET['error']; ?></b></span> 
			<?php
				}else{
				//opción2 venimos limpios
			?> bgcolor=#cccccc>Introduce tu clave de acceso 
			<?php } ?></td></tr> 
			<tr> 
				<td align="right">USER:</td>
				<td><input type="Text" name="usuario" size="8" maxlength="50"></td> 
			</tr> 
			<tr> 
				<td align="right">PASSWD:</td>
				<td><input type="password" name="contrasena" maxlength="50"></td> 
			</tr> 
			<tr> 
				<td colspan="2" align="center"><input type="Submit" value="Acceso"></td> 
			</tr> 
		</table> 
	</form>
	<p>
		Para ingresar, insertar <b>un usuario cualquiera y un password que cumpla:</b><br><br>
		La clave tiene al menos 8 caracteres y al menos una cifra del 0 al 9
	</p>
	<div align="center">
		<h2>Trabajando con cookies</h2>
		<h4>Contador de accesos</h4>
		<p>
		<?php echo $mensaje; ?><br><br>
		<!-- Actualizamos y sumamos uno al contador -->
		<a href="index4-1.php">Actualizar</a>
		<!-- Actualizamos con info para entrar en el GET -->
		<a href="index4-1.php?delete=true">Eliminar</a>
		</p>
	</div>
</body>
</html>