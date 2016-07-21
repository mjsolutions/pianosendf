<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contacto | MusicalPianoforte</title>
	<?php include "header.php"; ?>
	
		<div class="row contenido">	
			<!-- Aside -->
			<?php include "aside.php" ?>
			<!-- Fin del aside -->
			
			<!-- Contenido principal -->
			<div class="col-md-9 padding-lr22">
				<h4 class="red underline nomargin padding-bottom10">Contacto</h4>
				<h5 class="text-center nomargin padding-tb8"><b>Venta de Pianos, Usados, Seminuevos a Todo Mexico</b></h5>
				
				<div class="col-md-12 nopadding margin-bottom50 margin-top10 font13">

					<p class="nomargin">Llámenos y un ejecutivo altamente calificado atenderá sus preguntas y le informará todo lo que necesita saber para poder elegir y probar su piano. Puede visitarnos cualquier día de la semana. Si no puede venir, eliga de nuestro catalogo el piano que le agrade y nosotros le enviamos videos, y así mismo se lo hacemos llegar a su domicilio.</p><br><br>
					<p class="nomargin">Escribanos a nuestras direcciones de correo electronico:</p>

					
					<h5 class="text-center nomargin padding-top15 padding-bottom3"><b>CORREO ELECTRÓNICO</b></h5>
					<h4 class="text-center nomargin"><a href="mailto:pianoforte2003@hotmail.com" class="red">pianoforte2003@hotmail.com</a></h4>
					<h4 class="text-center nomargin"><a href="mailto:musicalpianoforte@hotmail.com" class="red">musicalpianoforte@hotmail.com</a></h4><br>

					<h5 class="text-center nomargin red">
						<b>Nuestra dirección</b>
					</h5>
					<p class="text-center nomargin red">JOSÉ IGNACIO IZAGUIRRE 199</p>
					<p class="text-center nomargin red">COL. AMPLIACION MANANTIALES</p>
					<p class="text-center nomargin red">A UNA CUADRA DE EL SALÓN MONARCA</p>
					<p class="text-center nomargin red">Y A 300 METROS DE CRUCERO SALIDA A QUIROGA</p>
					<p class="text-center nomargin red">Morelia, Mich.</p><br>

					<h5 class="text-center nomargin red"><b>Nuestros teléfonos</b></h5>
					<p class="text-center nomargin red"><b>Tel. (443) 327-66-70</b></p>
					<p class="text-center nomargin red"><b>Cel. (443) 145-83-51</b></p><br>
					
					<form class="form-horizontal" action="contacto.php" id="contacto" method="post">
              <div class="form-group">
            		<label for="nombre">Nombre:</label>
                <input type="text" class="form-control" placeholder="Tu Nombre..." maxlength="40" id="nombre" name="nombre"/>
              </div>
              <div class="form-group">
            		<label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" placeholder="Tu Email..." maxlength="40" name="email" id="email" />
              </div>
              <div class="form-group">
            		<label for="email">Departamento o Area que desea enviar su correo:</label>
                <select class="form-control" name="dpto" id="dpto">
                  <option value="direccion">Dirección</option>
                  <option value="gerencia">Gerencia</option>
                  <option value="ventas">Ventas</option>
                  <option value="mercadotecnia">Mercadotecnia</option>
                  <option value="taller">Taller</option>
                  <option value="sugerencias">Sugerencias</option>
                </select>
              </div>
              <div class="form-group">
            		<label for="email">Comentario:</label>
                <textarea  class="form-control" style="height: 130px;" placeholder="Escribenos tu mensaje..." name="mensaje" id="mensaje"></textarea>
              </div>
              <input type="submit" class="btn btn-link red" value="Enviar correo" id="enviar" style="float:right">
          </form>

				</div>
					
			</div>
			<!-- Fin del contenido principal -->
		</div>
		<?php include "footer.php"; ?>
</body>
</html>