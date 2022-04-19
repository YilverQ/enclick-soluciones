<div class="mePersonal">
		<div class="titleMePersonal">
			<div class="letraIEquipo"><i class="fa-solid fa-user-group"></i></div>
			<h3 id="nuestro_equipo">Nuestro equipo.</h3>
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
	</div>