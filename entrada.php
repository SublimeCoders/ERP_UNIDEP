<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrada</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>
    <div class="container">

      <h1>Entrada a la clase</h1>
			<?php
			include('conexion.php');
			$matricula= $_POST["txt_matricula"];
			$hora=date("H:i:s");

			try {
				//Codigo para agregar la asistencia
				echo "<h2>registrado a las ".$hora."</h2>";
				//Script para la registrar
				$agregar = "INSERT INTO asistencia (matricula,h_e) VALUES ('$matricula','$hora')";
				mysql_query($agregar);
				// Cerramos la conexion
				mysql_close($con);

			// Si algo salio mal nos dira aqui
			} catch (Exception $e) {
				echo "Hubo un error al momento de registrar, por favor intentelo de nuevo";
			}
?>
<style>
	body{
			background-color: #ebf1ec;
			font-family: helvetica;
	}
	h1{
		background-color: #1f212e;
		color: #fbfdff;
		font-size: 30px;
		padding: 20px;
	}
	h2{
		color: #474246;
		padding: 10px;
	}
</div>
</body>
</html>
