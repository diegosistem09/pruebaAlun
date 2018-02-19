<?php 
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];


$guardar = " INSERT INTO `pruebadb`.`estudiantes` (`nombre`, `apellido`, `telefono`) VALUES ('$nombre','$apellido','$telefono') ";

    $query = mysql_query($guardar, conectar());      
 		 
    if($query==null) 
    {
    	var_dump($guardar);
		die("ERRO DE INSERT 1");
    }
    else{
    	die("se almacenaron loa datos");
    }

 
 
 
 ?>