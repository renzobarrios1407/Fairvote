<?php 

function Conectarse() 
{

   $host = "localhost";
   $usuario = "root";
   $password = "93121008090";
   $BaseDatos = "votaciones";
   
 
   if (!($link=mysql_connect($host,$usuario,$password))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db($BaseDatos,$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 

   return $link; 
} 

$link=Conectarse(); 
 


?>