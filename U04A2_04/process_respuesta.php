<?php
$s_ant=session_name();
session_start();
if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=0;
}else{
    $_SESSION['contador']++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Procesando datos sesion</title>
</head>
<body>
<?php
if (!isset($_GET['boton'])) {	
//Añadimos los valores del anterior formulario
$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['password']=$_POST['password'];
$s_act=session_name('SESION_CONTADOR');
//declaramos array para la tabla
$tabla = array('ID','Número de accesos','Nombre actual','Nombre anterior');
$valor = array(session_id(),$_SESSION['contador'],$s_act,$s_ant);
echo "<table border=1><tr><th colspan=\"2\">Información de la sesión</th></tr>";
for ($i=0; $i < count($tabla); $i++) { 
	echo "<tr><td>".$tabla[$i]."</td><td>".$valor[$i]."</td></tr>";
}
echo "</table>";
echo "<form action=\"process_respuesta.php\" method=\"GET\"><input type=\"submit\" name=\"boton\" value=\"Actualizar\"/></form>";
var_dump($_SESSION['password']);
}else{
	if (strlen($_SESSION['password'])>6 && (!empty($_SESSION['nombre']))) {
		echo "<p>PASSWORD VALIDO<br><span>Mensaje Aceptado</span><br>Se ha podido comprobar que nombre y pass usuario<br>Bienvenido</p>";
	}else{
		echo "<p>PASSWORD NO VALIDO: la clave debe tener al menos 6 caracteres o no hay datos de nombre<br><span>Mensaje de Rechazo</span><br>Lo siento no tiene privilegios<br><a href=\"form_index.php\">Volver a pagina de inicio</a>";
	}
}
?>
	
</body>
</html>