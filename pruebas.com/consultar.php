<!DOCTYPE html>
<html leng="es">
<head>
	<title>consultar</title>
</head>
<body>

<?php 
$conexion = include("conexion.php");
$apellido =$_POST['apellido'];
if(!$apellido){
	$consulta ="SELECT * FROM `estudiantes`";
	echo $consulta;
	$query1=  mysql_query($consulta, conectar());  

	if(!$consulta){
		die("ERORO EN LA CONSULTA");
	}else{

		if($resultado = mysql_fetch_array($query1)){
			$nombre = $resultado["nombre"];
			$apellido = $resultado ["apellido"];
			$telefono = $resultado ["telefono"];

			echo
			'
			<form action="consultar.php">
	<label >Nombre :</label>
	<input type="text" name="nombre" value='. "$nombre ".' >
	<label >Apellidos :</label>
	<input type="text" name="apellido" value='."$apellido".' >
	<label>Telefono</label>

	<input type="text" name="telefono" value='."$telefono".' >

	<input type="submit" value="consultar">
	</form>
			';
		}
	}

}
else{
$consulta ="SELECT * FROM `estudiantes` WHERE apellido like %$apellido";
	echo $consulta;
	$query1=  mysql_query($consulta, conectar());  

	if(!$consulta){
		die("ERORO EN LA CONSULTA");
	}
	else{

		if($resultado2 = mysql_fetch_array($query1)){
			$nombre = $resultado2["nombre"];
			$apellido = $resultado2 ["apellido"];
			$telefono = $resultado2 ["telefono"];

			echo
			'
			<form action="consultar.php">
	<label >Nombre :</label>
	<input type="text" name="nombre" value='. "$nombre ".' >
	<label >Apellidos :</label>
	<input type="text" name="apellido" value='."$apellido".' >
	<label>Telefono</label>

	<input type="text" name="telefono" value='."$telefono".' >

	<input type="submit" value="consultar">
	</form>
			';
		}
}

}

?>

</body>
</html>