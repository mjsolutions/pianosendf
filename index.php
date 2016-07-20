<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
    <meta name ="Robots" content="index, follow" />
    <meta name="author" content="NodoLab">
    <meta name="COPYRIGHT" content="NodoLab">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body class="container-fluid" onload="muestraReloj()">

	<div class="col-md-7 col-center wrap">
		<div class="row header">
			<img src="images/header1.jpg" class="img-responsive" id="img-header1" alt="">
			<img src="images/header2.jpg" class="img-responsive" id="img-header1" alt="">
			<div id="menu">
				<a href="#">Home</a>
				<a href="#">Empresa</a>
				<a href="#">Servicios</a>
				<a href="#">Trabajos</a>
				<a href="#">Ubicación</a>
				<a href="#">Contacto</a>
				<a href="#">Catálogo</a>
				<span id="reloj"></span>
			</div>
		</div>
		<div class="row contenido">			
				<div class="col-md-3 aside border">
					<img src="images/aside.jpg" class="img-responsive" alt="">
					<div class="row aside-content padding-tb8 padding-lr22">
						<ul>
							<li><a href="" class="red">- Reconocimientos</a></li>
							<li><a href="" class="red">- Pagos</a></li>
							<li><a href="" class="red">- Envíos</a></li>
							<li><a href="" class="red">- Costos</a></li>
							<li><a href="" class="red">- Garantías</a></li>
							<li><a href="" class="red">- Ebanistería</a></li>
							<li><a href="" class="red">- Artículos de interes</a></li>
						</ul>
						<!-- <hr> -->
						<p class="text-left nomargin border-top padding-top3 padding-left3">El mejor servicio</p>
						<p class="text-right nomargin">a los mejores precios</p>
					</div>
				</div>

				<div class="col-md-9 padding-lr22">
					<h6 class="red underline padding-bottom3">Ofertas de pianos y productos nuevos</h6>
					
					<div class="col-md-12 nopadding margin-bottom50">
						<div class="col-md-2 border nopadding">
							<img src="images/2.gif" class="img-responsive" alt="">
						</div>
						<div class="col-md-10">
							<h5 class="black nomargin"><b>Venta de Pianos, Usados, Seminuevos a Todo México</b></h5>
							<br>
							<p class="nomargin font12">Contamos con las mejores marcas de pianos al precio más bajo del mercado. El piano que usted busca nosotros lo tenemos</p>
							<p class="nomargin font12">
								<a href="" class="red">Visite nuestro catálogo, con más de 200 opciones!</a>
							</p>
						</div>
					</div>
					
					<div class="col-md-12 nopadding">

						<div class="col-md-6 nopadding padding-right12">
							<h6 class="red underline padding-bottom3">Boletínes</h6>
							<div class="col-md-4 border nopadding">
								<img src="images/1.gif" class="img-responsive" alt="">
							</div>
							<div class="col-md-8 nopadding padding-left12">
								<p class="nomargin font12">Consulta nuestros boletines e información clasificada.</p>
								<p class="nomargin">
									<a href="" class="red">Ver más</a>
								</p>
							</div>
						</div>

						<div class="col-md-6 nopadding padding-left12">
							<h6 class="red underline padding-bottom3">Notícias y artículos</h6>
							<div class="col-md-4 border nopadding">
								<img src="images/3.gif" class="img-responsive" alt="">
							</div>
							<div class="col-md-8 nopadding padding-left12">
								<p class="nomargin font12">Mantente bien informado con nuestras noticias y artículos.</p>
								<p class="nomargin">
									<a href="" class="red">Ver más</a>
								</p>
							</div>
						</div>

					</div>	
				</div>		
		</div>
		<div class="row footer">
			<p class="text-center">Derechos reservados a Pianoforte. Copyright <br> 2006-2007</p>
		</div>
	</div>
<!-- 	<script src="js/jquery-2.2.0.min.js"></script> -->
<script>
	function muestraReloj() {
	  var fechaHora = new Date();
	  var horas = fechaHora.getHours();
	  var minutos = fechaHora.getMinutes();
	  var segundos = fechaHora.getSeconds();
	 
	  if(horas < 10) { horas = '0' + horas; }
	  if(minutos < 10) { minutos = '0' + minutos; }
	  if(segundos < 10) { segundos = '0' + segundos; }
	 
	  document.getElementById("reloj").innerHTML = "hora: "+ horas+':'+minutos+':'+segundos;
	  setTimeout(muestraReloj, 1000);
	}
</script>
</body>
</html>