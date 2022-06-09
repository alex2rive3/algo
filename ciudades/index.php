<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
$link=conectar();
//print_r($_POST);
//print_r($_GET);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
          <!--<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">-->
   </head>
   <body>
     <?php
     	include('../libs/menu.php')
      ?>
      <div class="container">



     <?php
      if (!($_POST) && !($_GET))
      {
        include('list.php');
      }
        elseif ($_GET['mod']=="new")
        {
          include('form.php');
        }
        elseif ($_GET['mod']=="edit")
        {
        if ($_GET['id'])
        {
          $res=mostrarCiudad($link,$_GET['id']);
          include('form.php');
        }
        }
        elseif ($_GET['mod']=="delete")
        {
            if ($_GET['id']) {
              borrarCiudad($link,$_GET);
              include('list.php');
              // code...
            }

        }elseif ($_POST) {
          // code...
          if ($_POST['id']==-1)
          {
            $salida= agregarCiudad($link,$_POST);
            include('list.php');
            //echo $salida;
          } elseif ($_POST['id']!='') {
            $salida= editarCiudad($link,$_POST);
            include('list.php');
          }
        }

      ?>
      </div>

   </body>
 </html>
