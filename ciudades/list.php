<?php
$res=mostrarCiudades($link);
 ?>
 <h3>ciudades</h3><a href="index.php?mod=new">Nuevo</a></th>
 <?php
     while ($data=mysqli_fetch_array($res)){
       include 'card.vw.php';
       }
      ?>