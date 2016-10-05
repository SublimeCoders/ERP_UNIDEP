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

				<form class="form-signin" action="entrada.php" method="post" name="frm">
					<div class="form-group has-feedback">
						<div class="input-group">
							<span class="input-group-addon"><img src="imagenes/matricula.png" alt="contacto" width="30px"/></span>
							<input type="text" onkeypress="return valida(event)" class="form-control input-lg" name="txt_matricula" placeholder="Matricula" autofocus="">
						</div>
					</div>
					<input type="submit" onclick = "this.form.action = 'entrada.php'" value="¡Dame entrada!" class="form-control btn btn-primary input-lg" onclick="valida_envia()">
					<input type="submit" onclick = "this.form.action = 'salida.php'"  value="¡Ya me voy!" class="form-control btn btn-danger input-lg"  onclick="valida_envia()">
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
		<script>
		function valida_envia(){
				if(document.frm.txt_matricula.value == "") {
				alert("Ponga su matricula, por favor");
				document.frm.nombre.focus();
				return 0;
			}

		function valida(e){
		    tecla = (document.all) ? e.keyCode : e.which;

		    //Tecla de retroceso para borrar, siempre la permite
		    if (tecla==8){
		        return true;
		    }

		    // Patron de entrada, en este caso solo acepta numeros
		    patron =/[0-9]/;
		    tecla_final = String.fromCharCode(tecla);
		    return patron.test(tecla_final);
		}
</script>
