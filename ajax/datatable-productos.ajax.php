<?php

// require_once "../controllers/productos.controlador.php";
// require_once "../models/productos.modelos.php";

// require_once "../controllers/categorias.controlador.php";
// require_once "../models/categorias.modelos.php";

class TablaProductos{

 	//  MOSTRAR LA TABLA DE PRODUCTOS

	public function mostrarTablaProductos(){

		echo '{

			"data": [
			  [
				"1",
				"views/img/productos/101/105.png",
				"101",
				"Aspiradora Industrial",		
				"Taladros",
				"30",
				"$ 30",
				"$ 30",
				"2017-12-12 11:32:23",
				"botones"
			  ],
			  [
				"2",
				"views/img/productos/101/105.pn",
				"102",
				"Plato Flotante para Allanadora",		
				"Taladros",
				"30",
				"$ 30",
				"$ 30",
				"2017-12-12 11:32:23",
				"botones"
			  ]

			]
		}';
		
	}

}

// ACTIVAR TABLA DE PRODUCTOS

$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();
