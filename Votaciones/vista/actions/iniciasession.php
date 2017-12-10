<?php
@session_start();

if (isset($_POST)) {
	require_once '../../persistencia/PersistenceUsuario.php';
	require_once '../../modelo/Usuario.php';
	$controllerUser = PersistenceUsuario::getInstance();

	$usuario = $controllerUser -> login($_POST['user'], $_POST['password']);
	
	if($usuario == null){
		echo "Error de inicio de sesion";
	}
	
	else {
		$_SESSION['user'] = $usuario;
		if($usuario->getTipo()==1){		
			?>
			<script>
			  location.href="http://localhost/Votaciones/vista/administrador.php";
			 </script>
			<?php
     }elseif($usuario->getTipo()==2){		
			?>
           <script>
              location.href="http://localhost/Votaciones/vista/estadisticas.html";
			</script>
			<?php
     }elseif($usuario->getTipo()==3){		
			?>
           <script>
				location.href="http://localhost/Votaciones/vista/voto.php";
			</script>
			<?php
     }
		}
	
		
}
?>
