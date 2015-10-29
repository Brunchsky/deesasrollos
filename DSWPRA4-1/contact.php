<?php 
$styleCheese=$_COOKIE['sitestyle'];
//********************************* // Chequeamos si el estilo por defecto está elegido y seguimos navegando
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="style/<?php echo $styleCheese; ?>/style.css" rel="stylesheet" type="text/css"/>
<title>Segunda Hoja estaaatica</title>
</head>
<body>
<div id="mainContainer">
  <div id="menuContainer">
     <a href="index.php">Inicio</a> &nbsp; &middot; &nbsp; <a href="contact.php">Contacto</a> &nbsp; &middot; &nbsp; <a href="theme.php">Temas</a> 
  </div>
  <div  id="bodyContainer">
    <h3>Podemos comprobar <?php echo $_COOKIE['name'];  ?> que la cookie original sigue en movimiento con las sesiones</h3>
    <p>DEBE ESTAR REGISTRADA EN LA COOKIES DEL NAVEGADOR, SIN DUDA  :0) ...............</p>
    <p>AsIIi, por ejemplo, a las plantas las estudian. Los botAAAanicos haciendo descripciones morfolOOOogicas, los fIIIisicos interesados en la fisiologIIIia.</p>
    <p> yA VAMOS TERMINANDO ESTA LOCURA DE PAGINA.</p>
  </div>
</div>
</body>
</html>