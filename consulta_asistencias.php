<?php include("header.php") ?>
  <body>
      <?php
      include("conexion.php");
      $sql= 'SELECT * FROM asistencia';
      $resultado = mysql_query($sql, $con);

      if (!$resultado) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: ' . mysql_error()";
        exit;
      }
      ?>
    <div class="container">
      <table class="table table-striped  table-bordered">
      <caption>Consulta de asistencias</caption>
      <tr>
        <th> Matricula</th>
        <th> Hora de entrada</th>
        <th> Hora de salida</th>
      </tr>
      <?php
      while ($fila = mysql_fetch_assoc($resultado)) {
        echo "<tr> <td>".$fila['matricula']."</td> <td> ".$fila['h_e']."</td><td> ".$fila['h_s']."</td></tr>";
      }
      echo"</table>";
      mysql_free_result($resultado);

      echo "</div>";
      include("footer.php");
      ?>
  </body>

  <script src="js/bootstrap.min.js"></script>
</html>
