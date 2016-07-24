<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Catalogo | MusicalPianoforte</title>
	<?php include "header.php"; ?>
	
		<div class="row contenido">	
			<!-- Aside -->
			<?php include "aside.php" ?>
			<!-- Fin del aside -->
			
			<!-- Contenido principal -->
			<div class="col-md-9 padding-lr22">
				<h4 class="red underline nomargin padding-bottom10">Catalogo</h4>
				<h5 class="text-center nomargin padding-tb8"><b>Venta de Pianos, Usados, Seminuevos a Todo Mexico</b></h5>
				
				<div class="col-md-12 nopadding margin-bottom50 margin-top25 font13">

					<div class="col-md-6 col-sm-6 col-xs-6 padding-left25">
						<h5 class="text-center nomargin padding-tb8 red underline"><b>Pianos de Cola</b></h5>

						<?php 
							include "conexion2.php";
							$resultado = mysqli_query($con,"SELECT * FROM catalogo WHERE tipo = 'cola'");
							while($aux=mysqli_fetch_array($resultado)) {
								echo "<div class='row margin-top10'>
										<div class='max-height185'>
											<a href='http://musicalpianoforte.net/".$aux['ruta']."' rel='musicalPianoforte[gallery1]''>
												<img src='http://musicalpianoforte.net/".$aux['ruta']."' alt='".$aux['id']."' class='img-responsive'>
											</a>
										</div>
										<p class='text-center padding-top3 padding-bottom3 nomargin'>".str_replace("rn", "", utf8_encode(stripslashes($aux['descripcion'])))."</p>
										<p class='text-center nomargin red'>$ ".number_format($aux['costo'], 2, '.', ',')."</p>
										<p class='text-center nomargin'>Cel. (443) 145-83-51</p>
										<p class='text-center nomargin underline-gray padding-bottom3'><a href='mailto:".$aux['contacto']."' class='red'>".$aux['contacto']."</a></p>
									</div>";
							}

						 ?>

					</div>

					<div class="col-md-6 col-sm-6 col-xs-6 padding-left25">
						<h5 class="text-center nomargin padding-tb8 red underline margin-bottom10"><b>Pianos Verticales</b></h5>

						<?php 
							include "conexion.php";
							$resultado = mysqli_query($con,"SELECT * FROM catalogo WHERE tipo = 'vertical'");
							while($aux=mysqli_fetch_array($resultado)) {
								echo "<div class='row margin-top10'>
										<div class='max-height185'>
											<a href='http://musicalpianoforte.net/".$aux['ruta']."' rel='musicalPianoforte[gallery2]''>
												<img src='http://musicalpianoforte.net/".$aux['ruta']."' alt='".$aux['id']."' class='img-responsive'>
											</a>
										</div>
										<p class='text-center padding-top3 padding-bottom3 nomargin'>".str_replace("rn", "", utf8_encode(stripslashes($aux['descripcion'])))."</p>
										<p class='text-center nomargin red'>$ ".number_format($aux['costo'], 2, '.', ',')."</p>
										<p class='text-center nomargin'>Cel. (443) 145-83-51</p>
										<p class='text-center nomargin underline-gray padding-bottom3'><a href='mailto:".$aux['contacto']."' class='red'>".$aux['contacto']."</a></p>
									</div>";
							}

						 ?>

					</div>

				</div>
					
			</div>
			<!-- Fin del contenido principal -->
		</div>
		<?php include "footer.php"; ?>
	<script type="text/javascript" src="js/jquery-2.2.0.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>
	<script >
	jQuery(document).ready(function(){
		jQuery("a[rel^='musicalPianoforte']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:5000, autoplay_slideshow: true, social_tools: ''});
		
	});
	</script>
</body>
</html>