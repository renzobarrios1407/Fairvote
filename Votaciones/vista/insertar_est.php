<?php

 include_once "BD.php"; 
 
 $link=Conectarse(); 
    $nombre = $_GET['name'];
	$id = $_GET['id'];
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	$nit= $_GET['nit'];
	$curso = $_GET['curso'];
	
	mysql_query("insert into estudiante (nombre,id,
	curso,institucion_nit,password,user) values ('" . $nombre . "','" . $curso . "','" . $nit . 
      "','" . $pass ."','".$user."')");
 

 
mysql_close($link); //cierra la conexion 
	  header( 'Location:registro_est.html');
?>