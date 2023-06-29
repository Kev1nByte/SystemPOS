<?php

require_once "../controllers/productos.controlador.php";
require_once "../models/productos.modelos.php";

require_once "../controllers/categorias.controlador.php";
require_once "../models/categorias.modelos.php";

class TablaProductos{

 	//  MOSTRAR LA TABLA DE PRODUCTOS

	public function mostrarTablaProductos(){

		$item = null;
    	$valor = null;

  		$productos = ControladorProductos::ctrMostrarProductos($item, $valor);	


		
		$imagen = "<img src='views/img/productos/101/105.png'>";
		$botones =  "<div class='btn-group'><button class='btn btn-warning'><i class='fa fa-pencil'></i></button><button class='btn btn-danger'><i class='fa fa-times'></i></button></div>"; 
  
		$datosJson = '{
			"data": [';
  
			for($i = 0; $i < count($productos); $i++){

				$imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";
  
				$datosJson .='[
					"'.($i+1).'",
					"'.$imagen.'",
					"'.$productos[$i]["codigo"].'",
					"'.$productos[$i]["descripcion"].'",		
					"Taladros",
					"'.$productos[$i]["stock"].'",	
					"'.$productos[$i]["precio_compra"].'",
					"'.$productos[$i]["precio_venta"].'",
					"'.$productos[$i]["fecha"].'",
					"'.$botones.'"
				  ],';
  
			}
  
			$datosJson = substr($datosJson, 0, -1);
  
		   $datosJson .=   '] 
  
		   }';
		  
		echo $datosJson;
		
	}

}

// ACTIVAR TABLA DE PRODUCTOS

$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();
