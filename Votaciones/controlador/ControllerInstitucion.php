<?php
require_once realpath(dirname(__FILE__)) . "/../modelo/Institucion.php";
require_once realpath(dirname(__FILE__)) . "/../persistencia/PersistenceInstitucion.php";

class ControllerINstitucion{

    private static $_instance;

    protected function __construct(){
    }

    private function __clone(){
    }
	
    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
	
	public function insertInstitucion($Institucion){
        $persistenceInstitucion = PersistenceInstitucion::getInstance();
        return $persistenceInstitucion->insertInstitucion($Institucion);
    }   
	public function getInstituciones(){
        $persistenceInstitucion = PersistenceInstitucion::getInstance();
        return $persistenceInstitucion->getInstituciones();
    } 
}

?>