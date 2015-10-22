<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Estructuras de control</title>
</head>
<body>
	<h2>Sentencia while-else y condicionales if</h2>
	<form action="index.php" method="GET">
		<label for="num">Introduce número a comprobar: </label>
		<input type="text" id="num" name="n" size="5"/>
		<input type="submit" value="Aceptar">
	</form><br>
	<?php
		(isset($_GET['n']))?$n=$_GET['n']:$n=0;
		$numero=$n;
		$texto1="Introduce un numero cualquiera<br>";
		$texto2="Gracias<br>";
		echo (empty($n))?$texto1:$texto2;
		$divisor=2;	//Primer divisor a comprobar
		$cociente=$numero;
		$calcular=($cociente>1);	//hace que sólo usemos los valores que sean mayores que 1
		$potencia=0;
		echo "Descomposición factorial de números mayores que 1<br>";
		echo "<b>$numero</b>= ";
		while ($calcular) {
			if ($cociente%$divisor==0) {
				$cociente/=$divisor; //es lo mismo que $cociente=$cociente/$divisor
				$potencia++;
			}else{
				if ($potencia>0) {
					echo "$divisor<sup>$potencia</sup> x ";
				}
				if ($cociente==1) {
					$calcular=false;
				}
				$divisor++;
				$potencia=0;
			}
		}
		echo "Esto es todo";
	?>
</body>
</html>