<?php

if (isset($_POST)) {	
	require_once '../../modelo/Usuario.php';
	require_once '../../controlador/ControllerUsuario.php';	
	
	$usuario = new Usuario();
	$usuario->setNombre($_POST['name']);
	$usuario->setUsuario($_POST['user']);
	$usuario->setPassword($_POST['pass']);
	$usuario->setInstitucion($_POST['nit']);
	$usuario->setCurso($_POST['curso']);
	$usuario->setTipo('3');
	
	
	
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