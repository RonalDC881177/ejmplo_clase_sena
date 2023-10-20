<?php
    require_once "models/Rol.php";
    class Roles{

        public function main(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar usuarios
        public function createRol(){
            //creacion de rol_1
            $rol_1 = new Rol;
            $rol_1->setRolCode("1");            
            echo "<br>Código Rol: " . $rol_1->getRolCode(); 
            $rol_1->setRolName("admin");            
            echo "<br>Nombre Rol: " . $rol_1->getRolName();

            //objetos por constructor
            $rol_2 = new Rol("2", "customer");
            
        }
        //se puede crear tantos objetos como se deseen teniendo en cuenta una sola clase el objeto se identifica con el simbolo $ iniciando ejemplo $rol

    }
?>