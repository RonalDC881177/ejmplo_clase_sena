<?php
    class Rol{
        // ****** 1er Parte: Clase (POO) *************** //
        // Atributos
        private $rolCode;
        private $rolName;
        //porcada metodo privadeo se debe crear un set y un get

        
        // Métodos
        # Sobrecarga de Constructores
        public function __construct(){
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f ='__construct' . $i)){
                call_user_func_array(array($this, $f), $a);
            }
        }

        public function __construct2($rolCode, $rolName){
            $this->rolCode = $rolCode;
            $this->rolName = $rolName;
            
        }
        // Métodos set() y get() 

        # rolCode: set()
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        }
        # rolCode: get()
        public function getRolCode(){
            return $this->rolCode;
        }        
        // Persistencia DB (CRUD) ****** //

        # rolName: set()
        public function setRolName($rolName){
            $this->rolName = $rolName;
        }
        # rolName$rolName: get()
        public function getRolName(){
            return $this->rolName;
        }
        
        public function rollCreate(){
            try{
                $sql = 'INSERT INTO ROLES VALUES(:rolCode, :rolName)';
                his->dbh->prepare($sql);
            }
        }
    }
       
?>