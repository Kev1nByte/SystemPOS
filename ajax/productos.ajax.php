<?php

require_once "../controllers/productos.controlador.php";
require_once "../models/productos.modelos.php";

require_once "../controllers/categorias.controlador.php";
require_once "../models/categorias.modelos.php";

class AjaxProductos{

//   GENERAR CÓDIGO A PARTIR DE ID CATEGORIA

  public $idCategoria;

  public function ajaxCrearCodigoProducto(){

    $item = "id_categoria";
    $valor = $this->idCategoria;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

    echo json_encode($respuesta);

  }

}

// GENERAR CODIOG APARTIR DE ID CATEGORIA

if (isset($_POST["idCategoria"])) {

    $codigoProducto = new AjaxProductos();
    $codigoProducto -> idCategoria = $_POST["idCategoria"];
    $codigoProducto -> ajaxCrearCodigoProducto();

}

// ?>