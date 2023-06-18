
<?php

require_once 'controladores/rutas.controlador.php';
require_once 'controladores/cursos.controlador.php';
require_once 'controladores/clientes.controlador.php';

$rutas = new RutasControlador();

$rutas->inicio();
?>
