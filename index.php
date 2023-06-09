<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/usuarios.controlador.php";
require_once "controllers/categorias.controlador.php";
require_once "controllers/productos.controlador.php";
require_once "controllers/clientes.controlador.php";
require_once "controllers/ventas.controlador.php";

require_once "models/usuarios.modelos.php";
require_once "models/categorias.modelos.php";
require_once "models/productos.modelos.php";
require_once "models/clientes.modelos.php";
require_once "models/ventas.modelos.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();

?>