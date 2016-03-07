<!DOCTYPE html>
<html>
<head>
	<title> Ingresar Asistente  </title>
</head>
<body>

	<form>
		<center> <td colspan="2" align="center"> <h1> Ingresar Datos Asistente </h1> </td>> </center>
		<table align="center" width="225" cellspacing="2" cellpadding="2" border="0"></table>

	</form>

	<form method="POST" action="insert_asistente.php">
	Nombre: 
	<input type="text" name="nombre">
	<br>
	Apellido Paterno: 
	<input type="text" name="paterno">
	<br>
	Apellido Materno: 
	<input type="text" name="materno">
	<br>
	Telefono: 
	<input type="text" name="telefono">
	<br>
	codigo Del Asistente: 
	<input type="text" name="codigo">
	<br>
	<input type="submit" value="Ingresar">
	</form>
</body>
</html>