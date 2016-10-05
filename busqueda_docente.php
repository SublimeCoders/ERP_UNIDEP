<?php include("header.php");?>
<div class="container">

<?php
include("conexion.php");

$conexion=mysql_connect($host,$user,$pw)
or die("Problemas al conectar con la base de datos");

mysql_select_db($db,$conexion)
or die("Problemas al conectar con la base de datos");

$registro=mysql_query("SELECT * FROM asistencia WHERE matricula= '$_POST[Buscarmat]'")
or die("Problemas con la consulta: ".mysql_error());
?>

<table class="table table-striped  table-bordered">
  <caption>Consulta de un maestro</caption>
  <tr>
    <th>Matricula</th>
    <th>Materia</th>
    <th>Grupo</th>
    <th>Hora de entrada</th>
    <th>Hora de salida</th>
  </tr>

<?php
while ($reg=mysql_fetch_array($registro)) {

  echo "<tr><td>".$reg ['matricula']."</td> <td>".$reg ['id_materia']."</td> <td>".$reg ['id_grupo']."</td> <td>".$reg ['h_e']."</td> <td>".$reg ['h_s']."</td></tr>";

}
?>
</table>
</div>

<?php include("footer.php") ?>
