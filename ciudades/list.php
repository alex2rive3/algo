<?php
$res=mostrarCiudades($link);
?>
  <div class="container">
    <h3>Ciudades</h3><a href="index.php?mod=new" class="btn btn-success"><i class="ion-ios-personadd"></i> Nuevo</a></th>
  </div>
<?php
      while ($data=mysqli_fetch_array($res)){
        include 'card.vw.php';
      }
?>