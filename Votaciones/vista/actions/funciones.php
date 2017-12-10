<?php

function getInstituciones(){
	require_once realpath(dirname(__FILE__)) . "/../../modelo/Institucion.php";
	require_once realpath(dirname(__FILE__)) . "/../../controlador/ControllerInstitucion.php";

	$controller = ControllerInstitucion::getInstance();
	
	$instituciones = $controller->getInstituciones();
	
	$nits = array();
	
	foreach ($instituciones as $institucion){
		array_push($nits,array('nit'=>$institucion->getNit(),'nombre' => $institucion->getNombre()));
	}
	
	return $nits;
}

?>