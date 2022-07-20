<div class="mePersonal" id="nuestro_equipo">
		<div class="titleMePersonal">
			<div class="letraequipo">
				<img src="images/equipo.png">
			</div>
			<h3>Nuestro equipo.</h3>
		</div>
		<div class="ContenedorTarjetas">
		<?php include("templates/nuestro_equipo_DATA.php"); ?>
		<?php 
			foreach ($meTeam as $indice => $valor) {
				echo '<div class="tarjeta"> 
						<img src="/images/nuestro_personal/'.strtolower($valor["Nombre"]).'.png"> 
						<h4>'. $valor["Nombre"] .'</h4> 
						<p>'. $valor["Cargo"] .'</p> 
						<div class="botonesRedes"> 
							<a href="'.$valor["Social"]["Instagram"].'" target="_blank"><i class="fa-brands fa-instagram"></i></a> 
							<a href="'.$valor["Social"]["Facebook"].'" target="_blank"><i class="fa-brands fa-facebook"></i></a> 
							<a href="'.$valor["Social"]["Whatsapp"].'" target="_blank"><i class="fa-brands fa-whatsapp"></i></a> 
						</div>
					</div>';
			}	
		?>
		</div>
		<div class="alianzasContainer">
		<div class="titleMePersonal">
			<div class="icono-alinza"><img src="images/alianzas/iconoalianzas.png"></div>
			<h3 id="nuestroequipo">Alianzas Comerciales</h3>
		</div>

		  
         </div>
            <div class="carrusel">
      <div class="carrusel-items">
        <div class="carrusel-item">
          <img src="images/alianzas/1.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/2.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/3.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/4.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/5.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/6.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/7.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/8.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/9.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/10.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/1.png" alt="" />
        </div>
        <div class="carrusel-item">
          <img src="images/alianzas/2.png" alt="" />
        </div>
      </div>
    </div>


		</div>
	</div>