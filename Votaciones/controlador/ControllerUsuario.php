<?php
require_once "../../modelo/Usuario.php";
require_once "../../persistencia/PersistenceUsuario.php";

class ControllerUsuario{

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
	
	public function insertUsuario($usuario){
        $persistenceUsuario = PersistenceUsuario::getInstance();
        return $persistenceUsuario->insertUsuario($usuario);
    }   
	
	public function login($nick,$password){
		$persistenceUsuario = PersistenceUsuario::getInstance();
        return $persistenceUsuario->login($nick,$password);
	}
}

?>