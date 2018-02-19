<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="form">
<form action="guardar.php" method="post">

	<label >Nombre :</label>
	<input type="text" name="nombre" >
	<label >Apellidos :</label>
	<input type="text" name="apellido">
	<label>Telefono</label>
	<input type="text" name="telefono">

	<input type="submit" value="guardar">
</form>


<form name="consultar" action="consultar.php">

	<input type="submit" value="CONSULTAR">
</form>
</div>
</body>
</html>