<?php
    require_once "models/Rol.php";
    class Roles{
        public function main(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar el rol
        
        public function createRol(){
            $rol = new rol(
                null,
                "provider"
            );
            print_r($rol);
        }

        //consultar el rol
        public function readRol(){
            $roles = new rol;
            $roles = $roles->rolRead();
        }
        // Actualizar Rol
        public function updateRol(){
            // 1ra Parte: Obtener el registro
            $rol = new Rol;
            $rol = $rol->getRolById("1");            
            // 2da Parte: Actualizar el registro
            $rol_2 = new Rol(
                3,
                "vendedor"
            );
            
        }
        // Eliminar Rol
        public function deleteRol(){
            $rol = new Rol;
            // $rol->rolDelete("3");
        }
    }
?>