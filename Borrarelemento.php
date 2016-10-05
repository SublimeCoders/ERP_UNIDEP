<?php

include("conexion.php");
if (isset($_POST['matriculaborrar'])&& !empty($_POST['matriculaborrar']))
{
$con=mysql_connect($host,$user,$pw) or die("No podemos conectarnos a la base de datos");
mysql_select_db($db,$con) or die("Problemas con la BD");

$del=mysql_query("SELECT ID FROM asistencia WHERE matricula= '$_POST[matriculaborrar]' ",$con);

if($de=mysql_fetch_array($del))
{

	mysql_query("DELETE FROM asistencia WHERE matricula='$_POST[matriculaborrar]'",$con);


	echo "Dato eliminado";
}
}

else{

	echo "Problemas al borrar datos";
}

header("location:admin_crm.php");
?>
