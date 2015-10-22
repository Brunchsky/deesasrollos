<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actividades U04-01</title>
	<style type="text/css">
		html{
			
		}
	</style>
</head>
<body>
	<h2>Suma de vectores</h2>
	<?php
		if (isset($_POST['vector'])) { //cuando existe la variable ejecutamos el script para la suma
			//var_dump($_POST['vector']); AL SACAR ESTO VEMOS QUE ES UN ARRAY DE 9 ELEMENTOS
			$vector=$_POST['vector'];
			$n=count($vector); //contamos el numero de objetos contenidos en el array?
			$suma=0;
			echo "El vector tiene $n elementos<br>";
			for ($i=0; $i < $n; $i++) { 
				echo "$i=$vector[$i]<br>";
				$suma=$suma+$vector[$i];
			}
			echo "El resultado de la suma es: ".$suma;
		}
	?>
	<form action="index.php" method="POST">
		<?php
			$n=8;
			for ($i=0; $i <= $n; $i++) { 
				echo "<label for=\"vec$i\">$i</label>";
				echo "<input type=\"text\" id=\"vec$i\" name=\"vector[]\" size=\"10\"/><br>"; //el 'vector[]' hace que sea un array
			}
		?>
		<input type="submit">
	</form>
</body>
</html>