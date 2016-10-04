<?php
include("conexion.php");

	mysql_select_db($db,$con) or die("problemas al conectarse con la base de datos");
	mysql_query("INSERT INTO asistencia (matricula) VALUES ('$_POST[txt_matricula]')",$con);

	//Mensaje de asistencia
	echo '<script>alert("Su asistencia a sido registrada");</script>';

// Version php 5.5.52
?>
