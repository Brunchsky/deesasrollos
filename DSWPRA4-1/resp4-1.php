<?php 
	$nombre=$_POST['usuario'];
	setcookie("name",$nombre,time()+3600);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
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
		}elseif ((!preg_match('`[a-z]`',$clave)) || (!preg_match('`[A-Z]`',$clave))) {
		//Condicion3: debe contener alguna letra
			$error_pass = "La clave debe contener alguna letra";
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
		echo $_COOKIE['ssname']."  ".$_COOKIE['id']."<br>";
		echo "numero de accesos: ".$_COOKIE['count']."</p>";
	}else{
		echo "<p>Password no válido<br>Lo siento, no tienes privilegios para acceder a esta página, inténtelo de nuevo<br><br>";
		echo "<a href='index4-1.php?error=$error_encontrado'>Volver al inicio</a><br>";
		echo $_COOKIE['ssname']."  ".$_COOKIE['id']."<br>";
		echo "numero de accesos: ".$_COOKIE['count']."</p>";
	}
?>
</body>
</html>