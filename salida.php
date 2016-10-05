<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Salida</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>
    <div class="container">

      <h1>Salida de la clase</h1>
      <?php
      include('conexion.php');
      $matricula= $_POST["txt_matricula"];
      $hora=date("H:i:s");
      echo "<h2>registrada a las ".$hora." </h2>";
      $actualizar = ("UPDATE asistencia set h_s='$hora' where matricula='$matricula' and h_s='00:00:00' ");
      mysql_query($actualizar);
      //Mensaje de asistencia

      mysql_close($con);
      // Version php 5.5.52
      header("location:login.php");
      ?>
    </div>
    <script>alert("Se registro su salida de la clase")</script>

    <style>
      body{
          background-color: #ebf1ec;
          font-family: helvetica;
      }
      h1{
        background-color: #492f2e;
        color: #fbfdff;
        font-size: 30px;
        padding: 20px;
      }
      h2{
        color: #474246;
        padding: 10px;
      }

    </style>
  </body>
</html>
