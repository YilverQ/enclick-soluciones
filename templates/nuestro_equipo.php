<div class="mePersonal" id="nuestro_equipo">
		<div class="titleMePersonal">
			<div class="letraIEquipo"><i class="fa-solid fa-user-group"></i></div>
			<h3>Nuestro equipo.</h3>
		</div>
		<div class="ContenedorTarjetas">
		<?php include("templates/nuestro_equipo_DATA.php"); ?>
		<?php 
			foreach ($meTeam as $indice => $valor) {
				echo '<div class="tarjeta"> 
						<img src="/images/nuestro_personal/'.strtolower($valor["Nombre"]).'.png"> 
						<h4>'. $valor["Nombre"] .'</h4> 
						<p>'. $valor["Correo"] .'</p> 
						<div class="botonesRedes"> 
							<a href="'.$valor["Social"]["Instagram"].'" target="_blank"><i class="fa-brands fa-instagram-square"></i></a> 
							<a href="'.$valor["Social"]["Facebook"].'" target="_blank"><i class="fa-brands fa-facebook-square"></i></a> 
							<a href="'.$valor["Social"]["Whatsapp"].'" target="_blank"><i class="fa-brands fa-whatsapp-square"></i></a> 
						</div>
					</div>';
			}	
		?>
		</div>
		<div class="alianzasContainer">
		<div class="titleMePersonal">
			<h3 id="nuestro_equipo">Alianzas comerciales.</h3>
		</div>
		<div class="alianzas">
			<div class="equipo"><img src="images/alianzas/alianza1.png"></div>
			<div class="equipo"><img src="images/alianzas/alianza2.png"></div>
			<div class="equipo"><img src="images/alianzas/alianza3.png"></div>
			<div class="equipo"><img src="images/alianzas/alianza4.png"></div>
			<div class="equipo"><img src="images/alianzas/alianza5.png"></div>
			<div class="equipo"><img src="images/alianzas/alianza6.png"></div>
			<div class="equipo"><img src="images/alianzas/alianza7.png"></div>
		</div>
		</div>
	</div>