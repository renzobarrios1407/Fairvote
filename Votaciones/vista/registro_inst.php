<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Contour
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130706

-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contour</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<!--[if IE 6]>
		<link href="default_ie6.css" rel="stylesheet" type="text/css" />
		<![endif]-->
	</head>
	<body>
		<div id="header-wrapper">
			<div id="header-wrapper2">
				<div id="header" class="container">
					<div id="logo">
						<h1><a href="#"  ><span>FAIRVOTE</span></a></h1>
					</div>
					<div id="menu">
						<ul>
							<li >
								<a href="index.html" accesskey="1" title="">INCIO</a>
							</li>
							<li>
								<a href="SERVICIOS.html" accesskey="2" title=""> NUESTROS SERVICIOS </a>
							</li>
							<li>
								<a href="INStituciones.HTML" accesskey="3" title="">INSTITUCIONES</a>
							</li>
							<li>
								<a href="personeros.html" accesskey="4" title="">PERSONEROS</a>
							</li>
							<li>
								<a href="contactenos.html" accesskey="5" title="">CONTACTENOS</a>
							</li>
							<li class="current_page_item">
								<a href="iniciar-sesion.php" accesskey="6" title=""><?php
								echo $_GET['nom'];
								?> CERRAR SESION </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper">
			<div id="page" class="container">
				<div id="content">
					<div id="banner">
						<img src="images/pic02.png" width="790" height="300" alt="" />
					</div>
					<div class="title">
						<h2>BIENVENIDO A FAIRVOTE</h2>
						<span class="byline"> </span>
					</div>

					<center>
						<div class="noticia">

							<div class="div-registro">
								<a href="administrador.php"><strong>REGRESAR AL MENU PRINCIPAL</strong></a> 
								<form action="actions/insertar_inst.php" method="post">
									<div class="registro2">
										Nombre:
										<input  type="text" name="nombre">
										<br>
										<br>
										NIT:
										<input type="text" name="nit">
										<br>
										<br>
										Direccion:
										<input type="text" name="dir">
										<br>
										<br>
										Correo Electronico:
										<input type="text" name="mail">
										<br>
										<br>
										Telefono:
										<input type="text" name="tel">
										<br>
										<br>
										nombre usuario:
										<input type="text" name="user">
										<br>
										<br>
										contraseña sesion:
										<input type="text" name="pass">
										<br>
										<br>

										<input type="submit" value="ENviar">
								</form>
							</div>
						</div>
					</center>

				</div>

			</div>
		</div>
		<div id="portfolio-wrapper">

			<
			<div id="info-empresa">
				<p>
					<strong>NUESTRA EMPRESA</strong>
					<br>
					fairvote es una empresa dirigida
					<br>
					a las escuelas del sector tanto publico
					<br>
					como privado de la cuidad de cartagena,
					<br>
					con el fin de promover a los lideres estudiantiles
					<br>
				</p>
			</div>

			<div id="contacto-pag">
				<strong>REQUIERE de nuestros SERVICIOS? contactenos!</strong>
				<ul>
					<li type="square">
						RENZO BARRIOS PAJARO & ANGIE QUINTANA TORREGLOZA
					</li>
					<li type="square">
						3174876196/3145214717
					</li>
					<li type="square">
						fairvote-solutions@gmail.com
					</li>

			</div>
			<div class="containetlogos">
				<div  id="fb">
					<img class="imagefotter"  src="Facebook_Logo.png" class="social" title="siguenos!" />
				</div>

				<div id="tw">
					<img class="imagefotter" src="twitter-logo.png" class="social" title="siguenos!" />
				</div>
			</div>
		</div>
		<div id="copyright" class="container">
			<p>
				Copyright (c) 2014 FairVote.com. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.
			</p>
		</div>
	</body>
</html>
