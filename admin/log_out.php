<?php

//llamado a la clase que hace la conexcion a la base de datos
require'../class/config.php';
//LLamado a la clase Usuarios para realizar el inicio de sesion
require'../class/users.php';
//llamado a la clase que ejecutará los queries de Consulta, Adición y Eliminación
require'../class/dbactions.php';
//llamado a la clase encargada de las sesiones
require'../class/sessions.php';

$objses = new Sessions();
$objses->init();

$con = new Connection();

$cliente = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
//echo "$cliente";
$objses->destroy($con->getConexion(),$cliente);

header('Location: http://localhost:80/SistemaEventos/index.php');

?>