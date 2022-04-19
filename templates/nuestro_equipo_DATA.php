<?php 

	//Datos De Mi Equipo.
	$social_Encli = ["Facebook"=>"Enclick1",
					 "Instagram"=>"Enclick1",
					 "Whatsapp"=>"Enclick1"];
	$encli = array( "Nombre"=>"Encli Velazque", 
					"Correo"=>"enclick@gmail.com",
					"Social"=> $social_Encli);
	
	$social_Gustavo = ["Facebook"=>"Gustavo1",
					 "Instagram"=>"Gustavo1",
					 "Whatsapp"=>"Gustavo1"];
	$gustavo = array("Nombre"=>"Gustavo Ponce", 
					"Correo"=>"gustavo@gmail.com",
					"Social"=> $social_Gustavo);

	$social_Yilver = ["Facebook"=>"https://www.facebook.com/yilver0906",
					 "Instagram"=>"https://instagram.com/yilver_quevedo",
					 "Whatsapp"=>"https://t.me/YilverQ"];
	$yilver = array("Nombre"=>"Yilver Quevedo", 
					"Correo"=>"yilver0906@gmail.com",
					"Social"=> $social_Yilver);

	$social_Anabel = ["Facebook"=>"anabel1",
					 "Instagram"=>"anabel1",
					 "Whatsapp"=>"anabel1"];
	$anabel = array("Nombre"=>"Anabel López", 
					"Correo"=>"anabel@gmail.com",
					"Social"=> $social_Yilver);

	//Array
	$meTeam[0] = $encli;
	$meTeam[1] = $gustavo;
	$meTeam[2] = $yilver;
	$meTeam[3] = $anabel;

	//Imprimir todos los datos.
	//print_r($meTeam);
?>