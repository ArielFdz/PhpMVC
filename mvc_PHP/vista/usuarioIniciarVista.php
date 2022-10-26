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
	<p><a href="../usuario/crear">Crear registro</a></p>
	<p><a href="../recurso/buscar">Buscar recursos</a></p>
</body>