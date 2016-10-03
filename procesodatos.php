
<?php
include("conexion.php");

if (isset($_POST['Nom_maestro'])&& !empty($_POST['Nom_maestro']))
{

	$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar con la base de datos");
	mysql_select_db($db,$con) or die("problemas al conectarse con la base de datos");
	mysql_query("INSERT INTO asistencias (Nombre_maestro) VALUES ('$_POST[Nom_maestro]')",$con);
	echo '<script language="javascript">alert("Su asistencia a sido registrada");</script>';
	echo "Su asistencia a sido registrada con exito ".$_POST['Nom_maestro'];


}

else{

	echo "Problemas al insertar los datos en la base de datos";
}

?>
