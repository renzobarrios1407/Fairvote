<?php 
    session_start(); 
    session_destroy(); 
  
    header('location: iniciar-sesion.html'); 
?>