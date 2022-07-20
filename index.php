<!DOCTYPE html>
<html lang="es">
<head>
	<!--Metas-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yilver Quevedo De Inforver">
	<meta name="description" content="Enclick Soluciones, una empresa dedicada a la solución de los problemas más frecuentes del área tecnológica.">
    <link rel="stylesheet" href="styles/carrusel.css" />
	<!--Title-->
	<title>Enclick Soluciones - Inicio</title>
	
	<!--Enlaces-->
	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/header-main.css">
	<link rel="stylesheet" type="text/css" href="styles/estilos.css">
	<link href="images/favicon.png" rel="icon" type="image/png"/>
    <script src="js/all.min.js"></script>
</head>
<body>
	
	<!--Menú-->
	<?php include("templates/menu.php"); ?>
	<!--Header-->
	<?php include("templates/header_main.php"); ?>
	<!--Personal de trabajo-->
	<?php include("templates/quienes_somos.php"); ?>
	<!--Personal de trabajo-->
	<?php include("templates/nuestro_equipo.php"); ?>
	<!--Servicios-->
	<?php include("templates/servicios.php"); ?>
	<!--Contador-->
	<?php include("templates/contador.php"); ?>
	<!--Videos de Youtube-->
	<?php include("templates/videos.php"); ?>
	<!--Zonas de coberturas-->
	<?php include("templates/zonas.php"); ?>
	<!--Contacto-->
	<?php include("templates/contacto.php"); ?>
	<!--Footer-->
	<?php include("templates/footer.php"); ?>
	
	


	<!--Enlaces JS-->
	<!--Genera iconos en la sección de servicios-->
    <script src="js/iconos-servicios.js"></script>
	<!--Script para hacer un acordeon en la sección de servicios-->
    <script src="js/servicios.js"></script>
	<!--Script para eliminar texto inecesario en la sección de servicios-->
    <script src="js/deleteText.js"></script>
	<!--Script para ejecutar las funciones cuando se hace un cambio de tamaño en la pantalla-->
    <script src="js/pantalla.js"></script>
    <script src="js/carrusel.js"></script>
</body>