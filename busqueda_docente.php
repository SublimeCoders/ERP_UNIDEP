<?php include("header.php");?>
<div class="container">
  <ol class="breadcrumb">
    <li><a href="admin_crm.php">Administracion del CRM</a></li>
    <li><a href="consulta_asistencias.php">Consulta de asistencia</a></li>
    <li class="active">Busqueda por matricula</li>
  </ol>
<?php
include("conexion.php");

$conexion=mysql_connect($host,$user,$pw)
or die("Problemas al conectar con la base de datos");

mysql_select_db($db,$conexion)
or die("Problemas al conectar con la base de datos");

$registro=mysql_query("SELECT * FROM asistencia WHERE matricula= '$_POST[Buscarmat]'")
or die("Problemas con la consulta: ".mysql_error());
?>
<div class="panel panel-info">
<div class="panel-heading"><?php echo "<h3>Consulta de $_POST[Buscarmat]</h3>"; ?></div>
<div class="panel-body">
<table class="table table-striped  table-bordered">

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
</div>
</div>
<?php include("footer.php") ?>
