<?php 

	//Datos De Mi Equipo.
	$social_Encli = ["Facebook"=>"https://www.facebook.com/encliemprendedor",
					 "Instagram"=>"https://instagram.com/encli_anderson",
					 "Whatsapp"=>"https://wa.link/aniliu"];
	$encli = array( "Nombre"=>"Encli Velasquez", 
					"Cargo"=>"Emprendedor",
					"Social"=> $social_Encli);
	
	$social_Gustavo = ["Facebook"=>"https://www.facebook.com/gustavo.ponce2",
					 "Instagram"=>"https://www.instagram.com/gustavoponce206",
					 "Whatsapp"=>"https://walink.co/511551"];
	$gustavo = array("Nombre"=>"Gustavo Ponce", 
					"Cargo"=>"Emprendedor",
					"Social"=> $social_Gustavo);

	$social_Yilver = ["Facebook"=>"https://www.facebook.com/yilver0906",
					 "Instagram"=>"https://instagram.com/yilver_quevedo",
					 "Whatsapp"=>"https://walink.co/1c5220"];
	$yilver = array("Nombre"=>"Yilver Quevedo", 
					"Cargo"=>"Desarrollador web",
					"Social"=> $social_Yilver);

	$social_Anabel = ["Facebook"=>"https://www.facebook.com/lopezaraque",
					 "Instagram"=>"https://www.instagram.com/jelitalpz7",
					 "Whatsapp"=>"https://wa.link/ac0hif"];
	$anabel = array("Nombre"=>"Anabel López", 
					"Cargo"=>"Social media",
					"Social"=> $social_Anabel);

	//Array
	$meTeam[0] = $encli;
	$meTeam[1] = $gustavo;
	$meTeam[2] = $yilver;
	$meTeam[3] = $anabel;

	//Imprimir todos los datos.
	//print_r($meTeam);
?>