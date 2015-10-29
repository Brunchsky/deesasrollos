<?php
//Comenzamos la sesion
session_start();
//Si venimos del link eliminar
		if (isset($_GET['delete'])) {
			unset($_COOKIE['count']);	//con el unset podemos entrar al siguiente if
			//setcookie("count","",time()-4200);	
		}
		//comprobamos si existe la cookie count si no existe, la creamos:si existe le sumamos 1
		if (!isset($_COOKIE['count'])) {
			@$numero=1;
			setcookie("count",$numero,time()+3600);
			setcookie("id",session_id(),time()+3600);
			setcookie("ssname",session_name(),time()+3600);
			setcookie("theme","insecto",time()+3600);
			$mensaje="Bienvenido, es la primera vez que accedes a nuestra web";
		}else{
			//No se si hay otra manera de sumarle una vuelta sin usar el setcookie
			setcookie("count",(($_COOKIE['count'])+1),time()+3600);
			$mensaje="Has accedido ".$_COOKIE['count']." a nuestra web";
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		
	?>
	<h1>Autentificación PHP</h1> 
	<!-- Formulario de acceso de datos con 2 opciones -->
	<form action="resp4-1.php" method="POST">
		<table width="225" cellspacing="2" cellpadding="2" border="0"> 
			<tr><td colspan="2" align="center" 
			<?php 
				//opcion1 venimos de la página de respuesta con los datos rechazados
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
		<a href="index4-1.php">Actualizar</a>
		<a href="index4-1.php?delete=true">Eliminar</a>
		</p>
	</div>
	<?php  ?>
</body>
</html>