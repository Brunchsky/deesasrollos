<?php
/*1ER EJEMPLO. LOS APUNTES ESTABAN MAL EL CÓDIGO QUE SIGUE FUNCIONA
if ($c=mysqli_connect("127.0.0.1:8889","8user8","6pass9")) {
	echo "<h2>Conexión establecida con el servidor</h2>";
	//Creamos identificador que contendrá las bases de datos
	$p=mysqli_query($c,"SHOW DATABASES");
	//Le preguntamos al identificador cuántas hay
	$numero=mysqli_num_rows($p);
	echo "Hay $numero en el servidor<br>";
	//Extraemos los nombres de las bases de datos
	while ($row=mysqli_fetch_assoc($p)) {
		echo $row['Database']."<br>";
	}
	if (mysqli_close($c)) {
		echo "<h2>Conexión cerrada con éxito</h2><br>";
	}else {
		echo "<h2>No se ha cerrado la conexión</h2>";
	}
}else{
	echo "<h2>NO HA SIDO POSIBLE ESTABLECER LA CONEXIÓN";
}FIN 1ER EJEMPLO */

/*EJEMPLO 2 VUELVE A HABER ERROR en mysql_query($link, "query")
if ($conexion=mysqli_connect("127.0.0.1:8889","8user8","6pass9")) {
	echo "<h2>Conexión realizada con el servidor</h2><br>";
	//creamos la base de datos
	if ($result=mysqli_query($conexion,"CREATE DATABASE PHP_the_Best CHARACTER SET utf8 COLLATE utf8_spanish_ci")) {
		echo "<h2>Base de datos creada con éxito</h2><br>";
	}else{	//informar si no se crea
		echo "<h2>No ha sido posible crear la base de datos</h2><br>";
	}
	//cerramos la conexión (hacerlo siempre después de cualquier consulta)
	if (mysqli_close($conexion)){
		echo "<h2>Conexión cerrada satisfactoriamente</h2><br>";
		//echo "<p>El identificador de conexión es ".$conexion."</p>";
	}else{	//informar si no se cierra
		echo "<h2>No se ha cerrado la conexión</h2><br>";
	}
}else{	//informar si no se puede conectar
	echo "<h2>No se ha podido realizar la CONEXIÓN";
}
echo "Hoy es día ".date("d/m/y")." y la hora actual es ".date("h:i:s")."<br><br>Queremos daros la bienvenida<br>";
FIN EJEMPLO 2 */

/*EJEMPLO PAGINA 9

//asignamos nombre de la base de datos a una variable
$crear="8BASDAT8";
//conectamos con el servidor
if ($conexion=mysqli_connect("127.0.0.1:8889","8user8","6pass9")) {
	echo "<h3>Hemos conectado chaval</h3>";
	$p=mysqli_query($conexion,"SHOW DATABASES");
	//creamos variable de control: si existe ese nombre => $comprueba=1
	$comprueba=0;
	while ($row=mysqli_fetch_assoc($p)) {
		echo $row['Database']."<br>";
		//aprovechamos y comprobamos si existe ya la base de datos
		if ($crear==$row['Database']) {
			$comprueba=1;
		}
	}
	$numero=mysqli_num_rows($p);
	if ($comprueba==0) {
		//al no existir creamos la tabla (ATT en los query las variables no encadenarlas)
		if (mysqli_query($conexion,"CREATE DATABASE $crear CHARACTER SET utf8 COLLATE utf8_spanish_ci")) {
			echo "<h3>Base de datos $crear creada</h3><br>";
		}else{	//comunicamos que no se ha creado
			echo "<h3>No ha sido posible crear la tabla de datos $crear</h3>";
		}
	}else{	//comunicamos que existe
		echo "<h3>La base de datos $crear ya existe</h3><br>";
	}
	//cerramos conexión
	if (mysqli_close($conexion)) {
		echo "<h3>Se ha cerrado la conexión</h3>";
	} else {	//avisamos de que no se ha podido cerrar
		echo "<h3>No ha podido cerrar la conexión</h3>";	
	}
} else { //comunicamos que no nos hemos conectado
	echo "<h2>No nos hemos podido conectar</h2>";
}*/


//creación de la tabla
$crear="8BASDAT8";
$la_tabla="Ejemplo88";
//conectamos de nuevo
$conex=mysqli_connect("127.0.0.1:8889","8user8","6pass9") or die("Imposible conectar");
//intentamos conectar con la base de datos
if (!mysqli_select_db($conex,$crear)) die("<h3>ERROR: al seleccionar BD $crear</h3>".mysqli_errno());
mysqli_query($conex,"SET NAMES 'utf8'");
echo "creando tabla";
//creamos el query en una variable
$sql="CREATE TABLE $la_tabla(
	num1 TINYINT,
	num2 TINYINT (3) UNSIGNED ZEROFILL,
	num3 TINYINT (7) UNSIGNED ZEROFILL DEFAULT 13,
	num4 REAL (8,3) ZEROFILL DEFAULT 3.14,
	fecha DATE,
	cadena VARCHAR(32) BINARY, opcion ENUM('Si','No','Quizás'));";
//ejecutamos el query usando variables
if (!$result=mysqli_query($conex,$sql)) die("<h3>ERROR al ejecutar: '$sql'".mysqli_errno());
//cerramos conexión
mysqli_close($conex);

?>
