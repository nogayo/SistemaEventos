<?php 

$conexion = pg_connect("user=postgres password=rocky port=5432 dbname=evento host=localhost");

if (!$conexion) {
	echo " <CENTER>
			tengo problemas
			</CENTER>

	";
	exit();
}

$result = pg_query($conexion, "SELECT * from eliminar_sesion('jhoss01')");

if (!$result) {
	echo "error no hay resultados";
	exit();
}


$row = pg_fetch_assoc($result);
echo "saludo desde la base de datos ". $row['descrip'];
echo "<br />\n";



 ?>