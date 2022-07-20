<!DOCTYPE html>
<html lang="es">
<head>
	<!--Metas-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yilver Quevedo De Inforver">
	<meta name="description" content="Enclick Soluciones, una empresa dedicada a la solución de los problemas más frecuentes del área tecnológica.">
	<meta name="keywords" content="Enclick Soluciones, Solucion, Soluciones empresariales, para tu empresa, Enclick, Encli">
	<meta name="robots" content="index, follow">
	<meta name="theme-color" content="#179c52">

	<!--Title-->
	<title>Enclick Soluciones - Inicio</title>
	
	<!--Estilos CSS-->
	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	
	<!--Icono de la web // Favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />	
	<!--Importamos los iconos de FontAwesome-->
    <script src="js/all.min.js"></script>
</head>
<body>	
<!--Importamos los documentos php-->
	<!--Wallpaper-Header-->
	<?php include("templates/wallpaper-SVG.php"); ?>
	
	<!--Menú-->
	<?php include("templates/menu.php"); ?>
	<!--Header-->
	<?php include("templates/header_main.php"); ?>

	<!--title_data-->
	<?php include("templates/title_data.php"); ?>

	<!--Quienes somos-->
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
	<!--Supervisa cuando cambia el tamaño de la pantalla y ejecuta las funcioes correspondintes-->
    <script src="js/monitor_change_screen.js"></script>
	<!--Script para reescribir el texto de la zona de coberturas cuando la pantalla es pequeña-->
    <script src="js/menu_short_text.js"></script>
	<!--Se oculta el menu cuando se hace click //NOTA: solo para pantalla muy pequeña (telefono)-->
    <script src="js/menu_click_hidden.js"></script>
	<!--Servicios en forma de acordeón-->
    <script src="js/accordion_services.js"></script>


	<!--Genera iconos en la sección de servicios-->
    <script src="js/iconos-servicios.js"></script>
</body>