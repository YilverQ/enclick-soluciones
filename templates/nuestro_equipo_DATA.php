<?php 

	//Datos De Mi Equipo.
	$social_Encli = ["Facebook"=>"https://www.facebook.com/encliemprendedor",
					 "Instagram"=>"https://bit.ly/3bQTSIY",
					 "Whatsapp"=>"https://wa.link/aniliu"];
	$encli = array( "Nombre"=>"Encli Velasquez", 
					"Cargo"=>"Director ejecutivo",
					"Social"=> $social_Encli,
					"Imagen"=> "encli-velasquez.webp");
	
	$social_Gustavo_disabled = ["Facebook"=>"https://www.facebook.com/gustavo.ponce2",
								"Instagram"=>"https://www.instagram.com/gustavoponce206",
								"Whatsapp"=>"https://walink.co/511551"];
	$gustavo_disabled = array("Nombre"=>"Gustavo Ponce", 
							"Cargo"=>"Gerente de ventas",
							"Social"=> $social_Gustavo,
							"Imagen"=> "gustavo-ponce.webp");

	$social_Yilver = ["Facebook"=>"https://www.facebook.com/yilver0906",
					 "Instagram"=>"https://bit.ly/3AFr1BQ",
					 "Whatsapp"=>"https://walink.co/1c5220"];
	$yilver = array("Nombre"=>"Yilver Quevedo", 
					"Cargo"=>"Desarrollador web",
					"Social"=> $social_Yilver,
					"Imagen"=> "yilver-quevedo.webp");

	$social_Anabela = ["Facebook"=>"https://www.facebook.com/lopezaraque",
					 "Instagram"=>"https://www.instagram.com/jelitalpz7",
					 "Whatsapp"=>"https://wa.link/ac0hif"];

	$anabela = array("Nombre"=>"Anabela López", 
					"Cargo"=>"Social media",
					"Social"=> $social_Anabela,
					"Imagen"=> "anabel-lopez.webp");

	//Array
	$meTeam[0] = $encli;
	$meTeam[1] = $yilver;
	$meTeam[2] = $anabela;

	//Imprimir todos los datos.
	//print_r($meTeam);
?>