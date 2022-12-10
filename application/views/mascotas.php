<?php include 'template/cabecera.php'; ?>

  <div class="container">
    <h1><?php echo $title ?></h1>
    <a href="<?php echo base_url("index.php/cMascota/crear"); ?>" class="btn btn-primary btn-block my-4" >Crear nueva mascotas</a>
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
                foreach ($mascotas as $mascota){
            ?>
                <tr>
                  <th scope="row"><?php echo $mascota->id ?></th>
                  <td><?php echo $mascota->nombre ?></td>
                  <td><?php echo $mascota->descripcion ?></td>
                  <td>
                    <a class='btn btn-warning bt-sm' href='<?php echo base_url("index.php/cMascota/editar/".$mascota->id)?>'>Editar</a>
                    <a class='btn btn-danger bt-sm' href='<?php echo base_url("index.php/cMascota/eliminar/".$mascota->id)?>'>Eliminar</a>
                  </td>
                </tr>
            <?php
              }
            ?>
          </tbody>
      </div>
  </div>

<?php include 'template/pie.php'; ?>
