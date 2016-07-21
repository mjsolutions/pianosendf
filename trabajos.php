<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trabajos | MusicalPianoforte</title>
	<?php include "header.php"; ?>
	
		<div class="row contenido">	
			<!-- Aside -->
			<?php include "aside.php" ?>
			<!-- Fin del aside -->
			
			<!-- Contenido principal -->
			<div class="col-md-9 padding-lr22">
				<h4 class="red underline nomargin padding-bottom10">Trabajos</h4>
				<h5 class="text-center nomargin padding-tb8"><b>Venta de Pianos, Usados, Seminuevos a Todo Mexico</b></h5>
				
				<div class="col-md-12 nopadding margin-bottom50 margin-top25 font13">

					<p class="nomargin">Los pianos pasan por manos de excelentes ebanistas, mismos que en caso de que el cliente lo solicite, se les practicarán ebanisterías de la más alta calidad.</p>
					<p class="nomargin text-center margin-top25">Muestra de algunos trabajos realizados.</p>
					<div class="nomargin margin-top10">

						<div class="row margin-top10">
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00193.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00193.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00194.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00194.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>				
							</div>
						</div>

						<div class="row margin-top10">
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00203.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00203.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00377.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00377.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>				
							</div>
						</div>

						<div class="row margin-top10">
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00381.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00381.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00477.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00477.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>				
							</div>
						</div>

						<div class="row margin-top10">
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00394.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00394.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<a href="images/trabajos/DSC00175.jpg" rel="musicalPianoforte[gallery1]">
									<img src="images/trabajos/DSC00175.jpg" alt="Musical Pianoforte" class="img-responsive">
								</a>				
							</div>
						</div>

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