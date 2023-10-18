<?php
    require_once "models/Rol.php";
    class Roles{

        public function main(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar usuarios
        public function createRol(){
            $rol = new Rol;
            $rol->setRolCode("1");            
            echo "<br>Código Rol: " . $rol->getRolCode();            
        }


        // Registrar nombre
        public function createName(){
            $rol = new Rol;
            $rol->setRolName("abc");            
            echo "<br>Nombre Rol: " . $rol->getRolName();            
        }
    }
?>