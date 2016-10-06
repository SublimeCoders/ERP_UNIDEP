<?php include("header.php") ?>
  <body>
    <div class="container">
    <ol class="breadcrumb">
      <li><a href="admin_crm.php">Administracion del CRM</a></li>
      <li class="active">Consulta de asistencia</li>
    </ol>

    <div class="panel panel-info">
      <div class="panel-heading"><h3 >Registro de asistencias</h3></div>
        <div class="panel-body">
          <form  class="navbar-form navbar-right" role="search" action="busqueda_docente.php" method="post" name="buscar">
            <div class="input-group">
              <span class="input-group-addon"><img src="imagenes/matricula.png" alt="contacto" width="20px"/></span>
              <input class="form-control" type="text" name="Buscarmat" id="txt_buscar" placeholder="Matricula" autofocus="">
            </div>
            <input type="submit" class="btn btn-primary " value="Buscar">
          </form>


      <table class="table table-striped  table-bordered">
        <tr>
          <th> Matricula</th>
          <th> Hora de entrada</th>
          <th> Hora de salida</th>
        </tr>

      <?php
      include("conexion.php");
      $sql= 'SELECT * FROM asistencia';
      $resultado = mysql_query($sql, $con);

      if (!$resultado) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: ' . mysql_error()";
        exit;
      }
      while ($fila = mysql_fetch_assoc($resultado)) {
        echo "<tr> <td>".$fila['matricula']."</td> <td> ".$fila['h_e']."</td><td> ".$fila['h_s']."</td></tr>";
      }
      echo"</table>   </div> </div> </div>";
      mysql_free_result($resultado);

      echo "</div>";
      include("footer.php");
      ?>
  </body>

  <script src="js/bootstrap.min.js"></script>
</html>
