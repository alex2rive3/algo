<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<h3>Personas</h3>
<form class="" action="index.php" method="post">
  <input class="form-control" type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>

  <label class="form-control" for="cin">cin</label><br>
  <input class="form-control" type="text" name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>

  <label class="form-control" for="apellido">Apellido</label><br>
  <input class="form-control" type="text" name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>

  <label class="form-control" for="nombre">nombre</label><br>
  <input class="form-control" type="text" name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>

  <label class="form-control" for="fenac">F. Nacimiento</label><br>
  <input class="form-control" type="text" name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>

  <label class="form-control" for="email">Email</label><br>
  <input class="form-control" type="text" name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>

  <label class="form-control" for="ciudad_id">Ciudad</label><br>
  <input class="form-control" type="text" name="ciudad_id" value="<?php if ($data['ciudad_id']){ echo $data['ciudad_id'];} ?>"><br>
  <select class="form-control" name="ciudad_id">
    <?php
    while ($d=mysqli_fetch_array($ciudades))
    {
      $sel='';
      if ($data['ciudad_id'] & ($d['id']==$data['ciudad_id']) )
        { $sel="selected='true'";}
      echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
    }
     ?>
  </select>
  <button class="form-control" type="submit" >Enviar</button>
  <button class="form-control"type="submit"><a href="index.php">volver</a></button>
</form>
