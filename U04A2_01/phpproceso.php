<<?php 

	function FaltanDatos(){
		echo "Falta ingresar algún dato<br>Los campos marcados con (*) son obligatorios<br>Pulse el botón para volver al formulario de ingreso<br>";
		echo "<form action="index.php"><input type="submit" value="Volver"></form>";
	}	//Fin funcion error

	if (isset ($_POST['nombre'] , $_POST['dni'])) { //Se supone que comprueba ambas variables a la vez
		if (isset($_POST['sueldo'])){	//si ha introducido los datos obligatorios comprobamos si introdujo sueldo
			if ($_POST['sueldo']>2000){		//al introducir sueldo comprobamos su valor
				echo $_POST['nombre']."tiene un sueldo eficiente";
			}else{
				echo $_POST['nombre']."tiene un sueldo ineficiente";
			}
		}else{
			FaltanDatos();
		}
	}else{
		FaltanDatos();
	}
 ?>