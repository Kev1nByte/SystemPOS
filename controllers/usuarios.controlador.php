<?php

class ControladorUsuarios{

    // INGRESO USUARIO

    public static function ctrIngresoUsuario(){

        if(isset($_POST["ingUsuario"])){

            if (preg_match('/^[-a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[-a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabla = "usuarios";

                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);            

                if (is_array($respuesta) && isset($respuesta["usuario"]) && isset($respuesta["password"]) && $respuesta["usuario"]
                 == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]) {
                    // Acciones si la autenticación es exitosa
                    
                    $_SESSION["iniciarSesion"] = "ok";
                    
                    echo '<script>window.location = "inicio";</script>';

                } else {
                    // Acciones si la autenticación falla
                    echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                }
                

            }

        }

    }

}

?>