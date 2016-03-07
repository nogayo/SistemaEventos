<?php

require'../class/sessions.php';
require'../class/dbactions.php';
$objses = new Sessions();
$objses->init();

$_usuario = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
echo "$_usuario";
$objses->destroy($_usuario);

header('Location: http://localhost:80/SistemaEventos/index.php');

?>