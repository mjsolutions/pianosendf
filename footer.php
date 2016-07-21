<div class="row footer">
			<p class="text-center">Derechos reservados a Pianoforte. Copyright <br> <?php echo date("Y"); ?></p>
		</div>
	</div>
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