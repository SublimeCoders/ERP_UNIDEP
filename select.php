<?php

include("conexion.php");

$conexion2=mysql_connect($host,$user,$pw)
or die("Problemas al conectar con la base de datos");

mysql_select_db($db,$conexion2)
or die("Problemas al conectar con la base de datos");

$registro=mysql_query("SELECT * FROM asistencias WHERE Nombre_maestro= '$_POST[Buscarnombre]'")
or die("Problemas con la consulta: ".mysql_error());


while ($reg=mysql_fetch_array($registro)) {
	
    echo "ID: ".$reg ['ID']."<br>";
	echo "Nombre: ".$reg ['Nombre_maestro']."<br>";
	echo "Hora de entrada: ".$reg ['Hora_entrada']."<br>";
	echo "Hora de salira: ".$reg ['Hora_salida']."<br>";

}

?>