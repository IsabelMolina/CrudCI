<div class="container">

  <h1>Crear Mascota</h1>

  <form action="<?php echo base_url("index.php/pet/insert"); ?>" method="post">

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Ingresar nombre">
    </div>

    <div class="form-group">
      <label for="description">Descripion</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Ingresar descripcion">
    </div>

    <button type="submit" class="btn btn-primary" name="btnAgregar" >Agregar</button>

  </form>

</div>
