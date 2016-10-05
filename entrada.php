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
header("location:login.php");
?>
<script>alert("Se registro su entrada a la clase")</script>
