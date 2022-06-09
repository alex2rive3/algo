<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>

<div class="container">
<h3>Ciudad</h3>
<form class="" action="index.php" method="post">
  <input class="form-control" type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  <label class="form-control" for="ciudad">Ciudad</label><br>
  <input class="form-control" type="text" name="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>"><br>
  <button class="form-control form-control btn btn-primary" type="submit" > <i class="ion-android-send"></i> Enviar</button>
  <button class="form-control btn btn-dark"> <a href="index.php"> <i class="ion-arrow-return-left"></i> Volver</a></button>
</form>
</div>
