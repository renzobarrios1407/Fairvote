<?php

require_once "../../persistencia/DataBase.php";
include_once "../../modelo/Usuario.php";

class PersistenceUsuario {
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


	public function login($usuario, $password) {

		$dataBase = DataBase::getInstance();

		$SQLexpresion = "SELECT * FROM usuarios WHERE  usuarios.usuario = '" . $usuario . "' AND usuarios.password = '" . $password . "'";

						 
		$result = $dataBase -> run($SQLexpresion);
		if (!$result) {
			return false;
		} else {

			$row = $dataBase->getRow($result, 0);
			$usuario = new Usuario();

			$usuario->setUsuario($row['usuario']);
			$usuario->setPassword($row['password']);
			$usuario->setNombre($row['nombre']);
			$usuario->setTipo($row['tipo']);

			
			
			return $usuario;
		}
	}

	public function insertUsuario($usuario) {
		$dataBase = DataBase::getInstance();
		$SQLexpresion = "INSERT INTO usuarios (
								id,
								usuario,
								password,
								tipo,
								nombre,
								curso,
								foto,
								isvoto,
								institucion) 
							VALUES('" . $usuario -> getId() . "',
							'" . $usuario -> getUsuario() . "',
							'" . $usuario -> getPassword() . "',
							'" . $usuario -> getTipo() . "',
							'" . $usuario -> getNombre() . "',
							'" . $usuario -> getCurso() . "',
							'" . $usuario -> getFoto() . "',
							'" . $usuario -> getIsvoto() . "',
							'" . $usuario -> getInstitucion() . "')";


       

		$result = $dataBase -> run($SQLexpresion);



		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function getUsuarios(){
			$dataBase = DataBase::getInstance();

			$SQLexpresion = "SELECT * FROM usuarios";

			$result = $dataBase->run($SQLexpresion);
			
			$usuarios = array();
						
			for ($i=0; $i < $dataBase->getNumRows($result); $i++) { 
				$row = $dataBase->getRow($result, $i);
				$usuario = new usuario();	
				$usuario->setId($row["id"]);  
				$usuario->setUsuario($row["usuario"]);
				$usuario->setpassword($row["password"]);
			    $usuario->setTipo($row["tipo"]);
			    $usuario->setNombre($row["nombre"]);
			    $usuario->setCurso($row["curso"]);
				$usuario->setFoto($row["foto"]);
				$usuario->setvoto($row["isvoto"]);
				$usuario->setInstitucion($row["institucion"]);
				array_push($usuarios, $usuario);
			}	
			return $usuarios;
		}	
}
?>