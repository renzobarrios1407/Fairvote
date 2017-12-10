<!-- Consultas SQL.

Autor: Julio Cesar Rodríguez
Programa de Ingeniería de Sistemas
Universidad de Cartagena 
Septiembre, 2007-->

<html> 
<head> 
   <title>Conexión a Bases de Datos - Mysql</title> 
</head> 
<body> 
<?php 

function Conectarse() 
{

   $host = "localhost";
   $usuario = "root";
   $password = "bdatos";
   $BaseDatos = "proveedores";
 
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
echo "Conexión con la base de datos conseguida.<br>"; 

// -----
   
   $ConsultaSQL = "select * from proveedores";	
   $result=mysql_query($ConsultaSQL,$link); 
 
   echo	"<table BORDER=1 CELLSPACING=1 CELLPADDING=1>"; 
   echo "<TR><TD>Codigo</TD><TD>Nombre</TD><TD>Tel&eacute;fono</TD><TD>Direcci&oacute;n</TD></TR>"; 
     

   while($row = mysql_fetch_array($result)) 
   { 
      printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["Codigo"],$row["Nombre"],$row["Telefono"],$row["Direccion"]); 
   } 
   mysql_free_result($result); 
  

   echo "</table>"; 



// ------



mysql_close($link); //cierra la conexion 

?> 

</body> 
</html> 
