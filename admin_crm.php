<?php include('header.php') ?>

  <div class="container">
    <a href="select.php">Buscar</a>
    <a href="Borrarelemento.php">Borrar registro</a>
    <a href="consulta_asistencias.php">Expediente</a>
  </div>


  <body>
  <center>
  <form action="busqueda_docente.php" method="post" name="buscar">
    <label for="txt_buscar">Buscar docente</label>
    <input type="text" name="Buscarmat" id="txt_buscar">
    <input type="submit" value="Buscar">
  </form>







  <form action="Borrarelemento.php" method="post"  name="borrar">
  <center><input type="text" name="matriculaborrar"></center></br>
  <center><input type="submit" onclick="alert('Datos eliminados correctamente')" value="Eliminar"></center></br>

  </form>

  </body>
  <center><footer class="animated fadeIn retraso-2">
  <nav>

  		<a href="contacto.html" class="espacioarriba">Contacto</a></br></br>
  		<a href="http://unidep.mx/plantel/hermosillo-modelo/" class="espacioarriba">Pagina oficial de UNIDEP</a></li></br></br>







  </nav></center>
<<?php include('footer.php') ?>
