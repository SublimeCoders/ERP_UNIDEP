<!DOCTYPE html>
<html>
<head>
	<!---->
	<title>ERP | UNIDEP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
	<link rel="stylesheet" href="css/login.css" media="screen" title="no title">
</head>
<body>
		<header>
			<div class="logo">
				<img src="imagenes/relog.png" alt="Asistencia" />
			</div>
		</header>

		<section class="main">
			<section "formulario">

				<form class="" action="procesodatos.php" method="post">
					<div class="form-group has-feedback">
						<div class="input-group">
							<span class="input-group-addon"><img src="imagenes/matricula.png" alt="contacto" width="30px"/></span>
							<input type="text" class="form-control input-lg" name="txt_matricula" placeholder="Matricula" autofocus="">
						</div>
					</div>
					<a href="procesodatos.php" class="entrada">
						<button type="button" class="form-control btn btn-primary input-lg" name="entrada" >¡Dame entrada!</button>
					</a>
					<a href="procesodatos.php" class="salida">
						<button type="button" class="form-control btn btn-danger input-lg" name="salida">¡Ya me voy!</button>
					</a>
				</form>
			</section>
		</section>
		<nav class="navbar navbar-fixed-bottom">
		  <div class="container">
				<footer>
					<p class="legal">Copyright (c) 2016 UNIDEP All Rights Reserved.</p>
				</footer>
			</div>
		</nav>
