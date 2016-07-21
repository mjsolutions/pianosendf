<?php 

function seguridad($entrada){
	return mysql_real_escape_string(htmlentities(trim($entrada)));
}

switch(seguridad($_GET["opcion"])){
	case 1:
		// var_dump($_POST);
	break;
}


 ?>