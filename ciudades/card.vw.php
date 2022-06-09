<div class="card">
  <div class="card-header">
    <?php echo $data['id'].", ".$data['ciudades']; ?>
  </div>
  <div class="card-body">
      <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-warning">Editar</a>
      <a href="<?php echo "index.php?mod=delecte&id=".$data["id"]; ?>" class="btn btn-danger">Borrar</a>
    </div>
    </div>
  </div>
</div>
