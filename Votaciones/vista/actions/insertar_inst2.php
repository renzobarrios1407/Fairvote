<?php

if (isset($_POST)) {	
	require_once '../../modelo/Institucion.php';
	require_once '../../controlador/ControllerInstitucion.php';	
	require_once '../../modelo/Usuario.php';
	require_once '../../controlador/ControllerUsuario.php';	
	
	//$institucion = new Institucion();
	//$institucion->setNombre($_POST['nombre']);
	//$institucion->setDireccion($_POST['dir']);
	//$institucion->setNit($_POST['nit']);
	//$institucion->setPassword($_POST['pass']);
	//$institucion->setTelefono($_POST['tel']);
	//$institucion->setUser($_POST['user']);
	//$institucion->setEmail($_POST['mail']);
	
	
	
	$usuario = new Usuario();
	$usuario->setNombre($_POST['nombre']);
	$usuario->setUsuario($_POST['user']);
	$usuario->setPassword($_POST['pass']);
	$usuario->setInstitucion($_POST['tel']);//
	$usuario->setCurso($_POST['mail']);//
	$usuario->setTipo('2');
	
	$controllerUsuario = ControllerUsuario::getInstance();

	if($controllerUsuario->insertUsuario($usuario)){
		$location = 'Location:../administrador.php'; 
		header($location);		
		return true;
	}
	else{
		return false;
	}
}
	
	
?>