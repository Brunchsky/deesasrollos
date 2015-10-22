<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actividades U04-02</title>
</head>
<body>
	<center>
	<h2>Suma de vectores variables</h2>
		<?php
			if (isset($_POST['vector'])) {	//solo podemos entrar si ha habido un get y después ejecutamos el post
				$vectori=$_POST['vector'];	//pasmos el array a una variable
				$n=count($vectori);			//contamos el número de elementos
				$suma=0;
				echo "El vector tiene $n elementos<br>";
				for ($i=0; $i < $n; $i++) { //desde el primer indice del array hasta su numero-1
					echo "$i=$vectori[$i]<br>";
					$suma=$suma+$vectori[$i];
				}
				echo "El resultado de la suma es: ".$suma."<br><br>";
			}
		?>
	<form action="index.php" method="GET">	<!-- Primer formulario para elegir num casillas -->
		<label for="numcas">Num Casillas: </label>
		<input type="text" id="numcas" name="n" size="5">
		<input type="submit" value="Aceptar"><br><br>		
	</form>
	<form action="index.php" method="POST">	<!-- Segundo formulario aparece siempre -->
		<?php
			(isset($_GET['n']))?$n=$_GET['n']:$n=0;	//si entramos 1a vez entonces $_GET no existe y $n=0
			//if (isset($_GET['n']))$n=$_GET['n'];else $n=0;	si estoy en index con variable GET del 1er formulario
			$texto1="Pon cuántos elementos quieres llenar<br><br>";
			$texto2="Gracias<br><br>";
			echo(empty($n))?$texto1:$texto2;	//si $n=0 se considera empty e imprimimos texto1
			for ($i=1; $i <=$n; $i++) { //si $n!=0 entonces entramos a hacer las casillas del Segundo formulario
				echo "<label for=\"vec$i\">$i</label>";
				echo "<input type=\"text\" id=\"vec$i\" name=\"vector[]\" size=\"10\"/><br>";	//declaramos array con vector[]

			}
		?>
		<input type="submit" value="Calculo casillas">
	</form>
	</center>
</body>
</html>