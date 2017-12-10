<?php

require_once realpath(dirname(__FILE__)) . "/DataBase.php";
require_once realpath(dirname(__FILE__)) . "/../modelo/Institucion.php";

class PersistenceInstitucion {
	private static $instance = null;

	public static function getInstance() {
		if (self::$instance == null) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
	}

	private function __clone() {
	}

	public function insertInstitucion($institucion) {
		$dataBase = DataBase::getInstance();
		$SQLexpresion = "INSERT INTO institucion (
								nombre,
								nit,
								direccion,
								email,
								telefono,
								user,
								password
								) 
							VALUES(
							'" . $institucion -> getNombre() . "',
							'" . $institucion -> getNit() . "',
							'" . $institucion -> getDireccion() . "',
							'" . $institucion -> getEmail() . "',
							'" . $institucion -> getTelefono() . "',
							'" . $institucion -> getUser() . "',
							'" . $institucion -> getPassword() . "')";
		
		$result = $dataBase -> run($SQLexpresion);

		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function getInstituciones(){
			$dataBase = DataBase::getInstance();

			$SQLexpresion = "SELECT * FROM institucion";

			$result = $dataBase->run($SQLexpresion);
			
			$instituciones = array();
						
			for ($i=0; $i < $dataBase->getNumRows($result); $i++) { 
							
				$row = $dataBase->getRow($result, $i);
				$institucion = new institucion();	
				$institucion->setNombre($row["nombre"]);  
				$institucion->setNit($row["nit"]);
				$institucion->setDireccion($row["direccion"]);
			    $institucion->setEmail($row["email"]);
			    $institucion->setTelefono($row["telefono"]);
			    $institucion->setFoto($row["foto"]);
				$institucion->setUser($row["user"]);
				$institucion->setPassword($row["password"]);
				
				array_push($instituciones, $institucion);
			}	
			return $instituciones;
		}	
}
?>