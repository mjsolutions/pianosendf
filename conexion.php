<?php
	global $mysqli;
	//sustituye los valores de usuario, contraseña y base de datos a los valores que tengas de tu base de datos
	$mysqli=new mysqli("67.227.144.24","pianosen_admin","1q2w3e4r5t","pianosen_mp");
	if($mysqli->errno){
		echo "<h1>Fallo la conexión con la base de datos";
	}
	$mysqli->set_charset("utf8");
	global $mysqli;
 ?>