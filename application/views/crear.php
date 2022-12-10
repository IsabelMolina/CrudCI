<?php include 'template/cabecera.php'; ?>

  <div class="container">

    <h1><?php echo $title; ?></h1>

    <form action="<?php echo base_url("index.php/cMascota/insertar"); ?>" method="post">

      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre" required>
      </div>

      <div class="form-group">
        <label for="descripcion">Descripion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar descripcion" required>
      </div>

      <button type="submit" class="btn btn-primary" name="btnAgregar" >Agregar</button>

    </form>

  </div>

<?php include 'template/pie.php'; ?>
