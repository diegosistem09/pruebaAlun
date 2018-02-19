<?php 
function conectar(){ 
	
	$link = mysql_connect("localhost","root","");

	if(!$link){
		die("ERROR DE CONEXION");
	}
	else{
		$db = mysql_select_db("pruebadb");
		if(!$db){
			die("ERORO DE CONEXIONN".$db);
		}
		else{
			echo "CONEXION EXITOSA";
		}

	}
	return $link;
}


 ?>