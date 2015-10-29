<?php
//Entramos con el valor que de el control del include
include 'style/css_cookie.php';
//Definimos la cookie con ese valor
setcookie('sitestyle',$styleCheese,time()+2592000);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="style/<?php echo $styleCheese; //actualizamos el estilo elegido ?>/style.css" rel="stylesheet" type="text/css"/>
<title>Hogar dulce hogar</title>
</head>
<body>
<div id="mainContainer">
  <div id="menuContainer">
     <a href="index.php">Inicio</a> &nbsp; &middot; &nbsp; <a href="contact.php">Contacto</a> &nbsp; &middot; &nbsp; <a href="theme.php">Temas</a> 
  </div>
  <div  id="bodyContainer">
    <p>Bienvenido <b><?php echo $_COOKIE['name']; ?></b></p>
    <h3>Las Ciencias Naturales Prof. Laura M. Banchio.  A 23 de septiembre de 2002. </h3>
    <p>Llamamos Ciencias Naturales a las ciencias que, desde distintos puntos de vista, estudian los fenomenos naturales.<br />
      <br />
    A continuacion se enumeran algunas de las ciencias que componen el conjunto de las Ciencias Naturales. </p>
    <p>Ah! ademas de saber que, usando PHP cookies, podemos almacenar estilos y temas de apariencia en la variable global propia de la sesion y que queda almacenada incluso cuando el navegador se cierra. </p>
    <p>Ademas, si queremos recuperar los estilos originales, basta con borrar las sesiones y vaciar las variables cookies  completamente.  <br />
      <br />
    </p>
  </div>
</div>
</body>
</html>