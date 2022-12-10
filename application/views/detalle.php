<?php include 'template/cabecera.php'; ?>

  <div class="container">

    <h1><?php echo $title; ?></h1>

    <form action="<?php echo base_url("index.php/cMascota/actualizar/".$mascota->id); ?>" method="post">

      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $mascota->nombre ?>" required>
      </div>

      <div class="form-group">
        <label for="descripcion">Descripion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $mascota->descripcion; ?>" required>
      </div>

      <button type="submit" class="btn btn-warning" name="btnEditar" >Editar</button>

    </form>

  </div>

<?php include 'template/pie.php'; ?>
