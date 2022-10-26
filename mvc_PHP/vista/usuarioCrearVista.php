<?php
/**
* Vista de la página inicial
*
* Contiene la plantilla para presentar la página inicial
*
* @package
* @author
* @version
* @date
*
**/
?>

<html>
<head>
	<title><?php echo $aplicacion; ?></title>
</head>
<body>
	<h1><?=$titulo?></h1>
	<p><a href="../usuario/iniciar">Inicio</a></p>
	<p><a href="../recurso/buscar">Buscar recursos</a></p>

	<form action="../usuario/guardar" method="post">
		Nombre: <input name="nombre"><br>
		Edad: <input name="edad"><br>
		Contraseña: <input name="contrasena"><br>
		<input type="submit" name= "boton" value="Crear">
	</form>

</body>