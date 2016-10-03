<?php
include("conexion.php");

$con2= mysql_connect($host,$user,$pw)
or die("Problemas al conectarse con la base de datos");


mysql_select_db($db,$con2)
or die("Problemas al conectarse con la base de datos");

$reporte=mysql_query("SELECT * FROM asistencias")
or die("Error en la consulta: ".mysql_error());


	echo $reporte;




?>