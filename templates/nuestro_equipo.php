<div class="mePersonal" id="nuestro_equipo">
		<div class="blockTitle">
			<div class="letraIicon"><i class="<?php echo $blocks[1][0] ?>"></i></div>
			<h3><?php echo $blocks[1][1] ?></h3>
		</div>
		<div class="ContenedorTarjetas">
		<?php include("templates/nuestro_equipo_DATA.php"); ?>
	    <?php foreach($meTeam as $indice=>$valor): ?>
		    <div class="tarjeta">
		    	<img src='/images/nuestro_personal/<?php echo $valor["Imagen"];?>' alt="<?php echo $valor["Nombre"];?>">
		    	<h4><?php echo $valor["Nombre"]; ?></h4>
		    	<p><?php echo $valor["Cargo"]; ?></p>
		    	<div class="botonesRedes">
		    		<a href="<?php echo $valor["Social"]["Instagram"]; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
		    		<a href="<?php echo $valor["Social"]["Facebook"]; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
		    		<a href="<?php echo $valor["Social"]["Whatsapp"]; ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
		    	</div>
		    </div>
    	<?php endforeach; ?>
		</div>
		<!--Iconos de las empresas con las que trabajamos-->
		<?php include("templates/iconsEnterprises_empresas.php"); ?>
	</div>