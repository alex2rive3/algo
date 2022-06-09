<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<h3>Ciudad</h3>
<form class="" action="index.php" method="post">
  <input class="form-control" type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  <label class="form-control" for="ciudad">Ciudad</label><br>
  <input class="form-control" type="text" name="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>"><br>
  <button class="form-control" type="submit" >Enviar</button><a href="index.php">volver</a>
</form>
