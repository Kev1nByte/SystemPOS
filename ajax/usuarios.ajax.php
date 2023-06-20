<?php

require_once "../controllers/usuarios.controlador.php";
require_once "../models/usuarios.modelos.php";

class AjaxUsuarios{

	// EDITAR USUARIO
	

	public $idUsuario;

	public function ajaxEditarUsuario(){

		$item = "id";
		$valor = $this->idUsuario;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);

	}

}

// EDITAR USUARIO

    if(isset($_POST["idUsuario"])){

        $editar = new AjaxUsuarios();
        $editar -> idUsuario = $_POST["idUsuario"];
        $editar -> ajaxEditarUsuario();

    }

