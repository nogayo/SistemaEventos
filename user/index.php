<?php

require'../class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

if($user == ''){
	header('Location: http://localhost:80/SistemaEventos/index.php?error=2');
}

?>
<!DOCTYPE html>

<html lang="esp">

    <head>
    <meta charset="utf-8" />
            <title>User Dashboard</title>
    </head>
        
    <body>
        
        <?php echo "Bienvenido, " . $_SESSION['user'];?>
        
        <ul>
            <li><a href="ingresar_asistente.php">Ingresar Asistente </a></li>
        </ul>

        <ul>
        	<li><a href="log_out.php">Salir</a></li>
        </ul>
        
    </body>
    
</html>