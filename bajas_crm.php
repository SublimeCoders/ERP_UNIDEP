<?php include("header.php") ?>
<div class="container">
  <ol class="breadcrumb">
    <li><a href="admin_crm.php">Administracion del CRM</a></li>
    <li class="active">Borrar un registro</li>
  </ol>
    <div class="panel panel-danger">
      <div class="panel-heading"><h3 class=panel-title>Eliminar un registro</h3></div>
      <div class="panel-body">
        <form class="navbar-form" action="Borrarelemento.php" method="post"  name="borrar">
          <div class="input-group">
            <span class="input-group-addon"><img src="imagenes/matricula.png" alt="contacto" width="20px"/></span>
            <input class="form-control" type="text" name="matriculaborrar" id="txt_buscar" placeholder="Matricula">
          </div>
          <input type="submit" class="btn btn-danger" onclick="alert('Registro eliminado correctamente')" value="Eliminar">
        </form>


      </div>
    </div>
</div>
<?php include("footer.php") ?>
