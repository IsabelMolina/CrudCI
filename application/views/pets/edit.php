<div class="container">

  <h1>Editar Mascota</h1>

  <form action="<?php echo base_url("index.php/pet/update/".$pet->id); ?>" method="post">

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" value="<?php echo $pet->name ?>">
    </div>

    <div class="form-group">
      <label for="description">Descripion</label>
      <input type="text" class="form-control" name="description" id="description" value="<?php echo $pet->description; ?>">
    </div>

    <button type="submit" class="btn btn-warning" name="btnEdit" >Editar</button>
  </form>

</div>
