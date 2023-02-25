
<div class="container">

  <h1>Mascotas</h1>

  <a href="<?php echo base_url("index.php/pet/create"); ?>" class="btn btn-primary btn-block my-4" >Crear nueva mascotas</a>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Accion</th>
          </tr>

        </thead>
        <tbody>
          <?php
              foreach ($pets as $pet){
          ?>
              <tr>
                <th scope="row"><?php echo $pet->id ?></th>
                <td><?php echo $pet->name ?></td>
                <td><?php echo $pet->description ?></td>
                <td>
                  <a class='btn btn-warning bt-sm' href='<?php echo base_url("index.php/pet/edit/".$pet->id)?>'>Editar</a>
                  <a class='btn btn-danger bt-sm' href='<?php echo base_url("index.php/pet/delete/".$pet->id)?>'>Eliminar</a>
                </td>
              </tr>
          <?php
            }
          ?>
        </tbody>
    </div>
</div>
