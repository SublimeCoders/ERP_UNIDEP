<?php include('header.php') ?>
<body>
	<div class="container">
		<form class="altaAlumno" action="" method="post">
			<div class="panel panel-primary" id="panelWrap">
				<div class="panel-heading">
					<h3 class="panel-title">INFORMACION DEL ALUMNO</h3>
				</div>
					<div class="panelContent">
						<span class="panelItems">
							<!-- Fila 1 -->
							<div class="row">
			  				<div class="col-xs-4">
									<label for="ap">Apellido Paterno</label>
			    				<input type="text" id="ap" class="form-control" name="aPaterno" required>
			  				</div>

								<div class="col-xs-4">
									<label for="am">Apellido Materno</label>
				    			<input type="text" id="am" class="form-control" name="aMaterno" required>
				  			</div>

				  			<div class="col-xs-4">
									<label for="nombre">Nombre(s)</label>
				    			<input type="text" id="nombre" class="form-control" name="nombre" required>
				  			</div>
							</div>
							<!-- Fila 2 -->
							<div class="row">
									<!-- Fecha de nacimiento -->
									<!-- Dia -->
			  				<div class="col-md-1">
									<label for="">Fecha</label>
									<input type="text" class="form-control" placeholder="Dia" required>
								</div>
									<!-- Mes -->
								<div class="col-md-1">
									<label for="">Nacimiento</label>
									<input type="text" class="form-control" placeholder="Mes" required>
								</div>
									<!-- Año -->
			  				<div class="col-md-1">
									<label for="">DD/MM/AAAA</label>
									<input type="text" class="form-control" placeholder="Año" required>
								</div>
									<!-- Espacio -->
								<div class="col-md-1">
								</div>
									<!-- Edad -->
								<div class="col-md-1">
									<label for="edad">Edad</label>
									<input id="edad" type="text" name="edad" class="form-control" required>
								</div>
									<!-- Estado Civil -->
								<div class="col-md-3">
									<label for="edCivil">Estado Civil</label>
									<select class="form-control" id="edCivil" name="edCivil">
										<option>Casado</option>
										<option>Soltero</option>
										<option>Viudo</option>
									</select>
								</div>
									<!-- CURP -->
							  <div class="col-xs-4">
									<label for="curp">CURP</label>
				  				<input id="curp" type="text" class="form-control">
				  			</div>
							</div>
							<!-- Fila 3 -->
							<div class="row">
								<div class="col-xs-4">
									<label for="tel">Telefono</label>
				    			<input id="tel" name="tel" type="text" class="form-control" placeholder="ej. 6621234444" required>
				  			</div>

				  			<div class="col-xs-4">
									<label for="cel">Celular</label>
				  				<input id="cel" name="cel" type="text" class="form-control" placeholder="ej. 6621234444" required>
				  			</div>

				  			<div class="col-xs-4">
									<label for="email">Correo</label>
				    			<input id="email" name="correo" type="email" class="form-control" placeholder="ej. abcd@gmail.com" required>
			  				</div>
							</div>
							<!-- Fila 4 -->
							<div class="row">
								<div class="col-xs-4">
									<label for="calle">Calle</label>
									<input id="calle" name="calle" type="text" class="form-control">
								</div>

								<div class="col-md-1">
									<label for="nExt">N.Ext</label>
									<input id="nExt" name="nExt" type="text" class="form-control">
								</div>

								<div class="col-md-1">
									<label for="nInt">N.Int</label>
									<input id="nInt" type="text" name="nInt" class="form-control">
								</div>

								<div class="col-md-2">
									<label for="col">Colonia</label>
									<input id="col" type="text" name="col" class="form-control">
								</div>

								<div class="col-md-4">
									<label for="ciudad">Ciudad</label>
									<input id="ciudad" type="text" name="ciudad" class="form-control">
								</div>
							</div>
							<!-- Fila 5 -->
							<div class="row">
								<div class="col-md-4">
									<label for="cNac">Ciudad de nacimiento</label>
									<input id="cNac" type="text" name="cNac" class="form-control">
								</div>

								<div class="col-md-4">
									<label for="eNacc">Estado de nacimiento</label>
									<input id="eNac" type="text" name="eNac" class="form-control">
								</div>

								<div class="col-md-4">
									<label for="cNac">Pais de nacimiento</label>
									<input id="pNac" type="text" name="pNac" class="form-control">
								</div>
							</div>
							<!-- Fila 6 -->
							<div class="row">
								<div class="col-md-4">
									<label for="escProc">Escuela de procedencia</label>
									<input id="escProc" type="text" name="escProc" class="form-control" required>
									</select>
								</div>

								<div class="col-md-4">
									<label for="esp">Especialidad</label>
									<input id="esp" type="text" name="esp" class="form-control" required>
								</div>

								<div class="col-md-1">
									<label for="prom">Promedio</label>
									<input id="prom" type="text" name="prom" class="form-control" required>
								</div>

								<div class="col-md-2">
									<label for="aGrad">Año de graduacion</label>
									<input id="aGrad" type="text" name="aGrad" class="form-control" required>
								</div>
							</div>
							<!-- Fila 7 -->
							<div class="row">
								<div class="col-md-2">
									<label for="cert">Certificado</label>
									<select id="cert" class="form-control" name="cert">
										<option>Si</option>
										<option>No</option>
									</select>
								</div>

								<div class="form-group">
		 				    	<label for="inputFile">Adjuntar</label>
							    <input type="file" id="inputFile" name="certificado">
							    <p class="help-block">Adjunte el archivo con el documento.</p>
							  </div>
							</div>
						</span>
					</div>

				<div class="panel-heading">
					<h3 class="panel-title">SOLICITUD DE ESTUDIOS</h3>
				</div>
					<div class="panelContent">
						<span class="panelItems">
							<!-- Fila 8 -->
							<div class="row">
								<div class="col-md-4">
									<label for="campus">Campus</label>
									<select id="campus" class="form-control" name="campus">
										<option>Hermosillo</option>
										<option>Caborca</option>
										<option>Aguascalientes<option>
									</select>
								</div>

								<div class="col-md-4">
									<label for="carrera">Carrera</label>
									<select id="carrera" class="form-control" name="carrera">
										<option>LISC - Licenciatura en Ingenieria de Sistemas Computacionales</option>
										<option>LCI - Licenciatura en Comercio Internacional</option>
										<option>LPM - Licenciatura en Publicidad y Mercadotecnia</option>
										<option>LE - Licenciatura en Enfermeria</option>
										<option>LDGM - Licenciatura en Diseño Grafico y Multimedia</option>
									</select>
								</div>

								<div class="col-md-1">
									<label for="beca">Beca</label>
									<input id="beca" type="text" name="beca" class="form-control">
								</div>

								<div class="col-md-1">
									<label for="grado">Grado</label>
									<select id="grado" class="form-control" name="grado">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
									</select>
								</div>

								<div class="col-md-1">
									<label for="numMat">Asignaturas</label>
									<select id="numMat" class="form-control" name="numMat">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
								</div>
							</div>
							<!-- Fila 9 -->
							<div class="row">
								<div class="col-md-8">
									<label>Seleccione las materias a cursar:</label>
								</div>
							</div>
							<!-- Fila 10 -->
							<div class="row">
								<div class="col-md-3">
									<label for="mat1">Materia 1</label>
									<select id="mat1" class="form-control" name="mat1">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="col-md-3">
									<label for="mat2">Materia 2</label>
									<select id="mat2" class="form-control" name="mat2">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="col-md-3">
									<label for="mat3">Materia 3</label>
									<select id="mat3" class="form-control" name="mat3">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="col-md-3">
									<label for="mat4">Materia 4</label>
									<select id="mat4" class="form-control" name="mat4">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
							</div>
							<!-- Fila 11 -->
							<div class="row">
								<div class="col-md-3">
									<label for="mat5">Materia 5</label>
									<select id="mat5" class="form-control" name="mat5">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="col-md-3">
									<label for="mat6">Materia 6</label>
									<select id="mat6" class="form-control" name="mat6">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="col-md-3">
									<label for="mat7">Materia 7</label>
									<select id="mat7" class="form-control" name="mat7">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="col-md-3">
									<label for="mat8">Materia 8</label>
									<select id="mat8" class="form-control" name="mat8">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
							</div>
							<!-- Fila 12 -->
							<div class="row">
								<div class="col-md-3">
									<label for="pago">Mensualidad</label>
									<input id="pago" type="text" name="pago" class="form-control">
								</div>
							</div>
						</span>
					</div>

					<div class="panel-heading">
						<h3 class="panel-title">INFORMACION ADICIONAL</h3>
					</div>
						<div class="panelContent">
							<span class="panelItems">
								<!-- Fila 12 -->
								<div class="row">
									<div class="col-md-4">
										<label for="cntoEm">Contacto de emergencia</label>
										<input id="cntoEm" type="text" name="cntoEm" class="form-control">
									</div>

									<div class="col-md-4">
										<label for="prstcEm">Parentesco</label>
										<input id="prstcEm" type="text" name="prstcEm" class="form-control">
									</div>

									<div class="col-md-4">
										<label for="telEm">Telefono de emergencia</label>
										<input id="telEm" type="text" name="telEm" class="form-control">
									</div>
								</div>
								<!-- Fila 13 -->
								<div class="row">
									<div class="col-md-4">
										<label for="seg">Seguro</label>
										<input id="seg" type="text" name="seg" class="form-control">
									</div>
								</div>
								<!-- Fila 14 -->
								<div class="row">
									<div class="col-md-6">
										<label for="enfs">Alergias/Enfermedades</label>
										<textarea id="enfs" name="obs" class="form-control" rows="10"></textarea>
									</div>

									<div class="col-md-6">
										<label for="obs">Observaciones</label>
										<textarea id="obs" name="obs" class="form-control" rows="10"></textarea>
									</div>
								</div>
							</span>
						</div>
						<button type="button" class="btn btn-success">Vista Previa</button>
						<button type="button" class="btn btn-danger">Cancelar</button>
			</div>
		</form>
	</div>
  <div class="back">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Regresar
    </button>
  </div>

  <div class="fwd">
	  <button type="button" class="btn btn-default btn-lg">
	    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Reportes
	  </button>
	</div>

	<?php include('footer.php') ?>
