<?php

    class consultasAdmin{

        // MODULO GESTION USUARIOS
        public function insertarUsuario(){

        }

        public function listarUsers(){
            $f = null;
            // CREAMOS UN OBJETO DE LA CLASE CONEXION
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $listar = "SELECT * FROM users";
            $statement = $conexion->prepare($listar);
            $statement->execute();

            while ($resultado = $statement->fetch()) {
                $f[] = $resultado;

            }
            return $f;

        }

        public function actualizarUser(){

        }

        public function eliminarUser(){

        }


    }

?>