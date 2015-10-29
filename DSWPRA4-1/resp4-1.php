<?php 
	$nombre=$_POST['usuario'];
	//Añadimos una vuelta al contador y actualizamos la cookie
	$numero=$_COOKIE['contador']+1;
	setcookie("contador",$numero,time()+2592000);
	//Le creamos una cookie al usuario para personalizar posterior navegación
	setcookie("name",$nombre,time()+2592000);
	//Creamos la cookie con los datos de sesion
	setcookie(session_name(),session_id(),time()+2592000);
	//Extraemos indice valor del array $_COOKIE 
	$ssid=$_COOKIE[session_name()];
	$ssname=array_search($ssid, $_COOKIE);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	echo $ssname;
//Venimos del formulario de intro datos y controlamos la contraseña
	$pass=$_POST['contrasena'];
	$error_encontrado="";
	function validarpass($clave,&$error_pass){ //variable por referencia, la funcion la actualiza
		//Condicion1: longitud mayor de 8 caracteres
		if (strlen($clave)<8) {
			$error_pass = "La clave debe ser de al menos 8 caracteres";
			return false;
		/*}elseif (ctype_alnum($clave)==false) {
		//Condicion2: que contenga sólo letras y números
			$error_pass = "La clave debe ser sólo de números y letras";
			return false;
		}elseif (!preg_match('`[a-z]`',$clave)) {
		//Condicion3a: debe contener alguna letra minuscula
			$error_pass = "La clave debe contener alguna letra minuscula";
			return false;
		}elseif (!preg_match('`[A-Z]`',$clave)) {
		//Condicion3b: debe contener alguna letra mayúscula
			$error_pass = "La clave debe contener alguna letra mayúscula";
			return false;*/
		}elseif (!preg_match('`[0-9]`',$clave)) {
		//Condicion4: debe contener algún número
			$error_pass = "La clave debe contener algún número";
			return false;
		}else{
			$error_pass="";
			return true;
		}
	}//FIN VALIDARPASS
	//Comprobamos
	if (validarpass($pass,$error_encontrado)) {
		echo "<p>Password válido<br>Se ha comprobado que ha introducido nombre y password correcto<br><br>";
		echo "<a href='index.php'>Acceder al contenido</a><br>";
		echo $ssname."  ".$ssid."<br>";
		echo "numero de accesos: ".$numero."</p>";
	}else{
		echo "<p>Password no válido<br>Lo siento, no tienes privilegios para acceder a esta página, inténtelo de nuevo<br><br>";
		echo "<a href='index4-1.php?error=$error_encontrado'>Volver al inicio</a><br>";
		echo $ssname."  ".$ssid."<br>";
		echo "numero de accesos: ".$numero."</p>";
		$_COOKIE['contador']+=1;
	}
?>
</body>
</html>