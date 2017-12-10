<?php

if (isset($_POST)) {	
	require_once '../../modelo/Institucion.php';
	require_once '../../controlador/ControllerInstitucion.php';	
	
	$institucion = new Institucion();
	$institucion->setNombre($_POST['nombre']);
	$institucion->setDireccion($_POST['dir']);
	$institucion->setNit($_POST['nit']);
	$institucion->setPassword($_POST['pass']);
	$institucion->setTelefono($_POST['tel']);
	$institucion->setUser($_POST['user']);
	$institucion->setEmail($_POST['mail']);
	
	$controllerInstitucion = ControllerInstitucion::getInstance();

	if($controllerInstitucion->insertInstitucion($institucion)){
		$location = 'Location:../administrador.php'; 
		header($location);		
		return true;
	}
	else{
		return false;
	}
}
	
	
?>