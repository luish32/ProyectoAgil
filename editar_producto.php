<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
    body{
      width: 100%;
      background: url("imgs/f4.jpg");
      background-size: 100%;
    }
    label{
      color: white;
    }

  </style>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/master.css">
</head>
<body>
  <h1 class="titulo4">Modificar Pelicula</h1>
  <div class="col-sm-12  col-sm-offset-2">

      <?php 
        $con = mysqli_connect('localhost','root','','proyectoagil');
        if (mysqli_connect_errno()) {
          echo "No se pudo conectar a la BD".mysqli_error();
        }

        $id_producto=$_GET['id_producto'];
        
        $query = mysqli_query($con, "SELECT * FROM productos WHERE id_producto = '$id_producto'");
        $row=mysqli_fetch_array($query);
   ?>
        <form class="form-horizontal" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="nombre">Nombre:</label>
          <div class="col-sm-10">
            <input value="<?php echo $row['nombre'] ?>" placeholder="Nombre" type="text" class="form-control" name="nombre">
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-sm-2" for="descripcion">Descripcion:</label>
          <div class="col-sm-10">
            <input value="<?php echo $row['descripcion'] ?>" placeholder="Descripcion" type="text" class="form-control" name="descripcion">
          </div>
        </div>

          <div class="form-group">
          <label class="control-label col-sm-2" for="ano">Año:</label>
          <div class="col-sm-10">
            <input value="<?php echo $row['ano'] ?>" placeholder="Año" type="number" class="form-control" name="ano">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-2" for="genero">Genero:</label>
          <div class="col-sm-10">
            <input value="<?php echo $row['genero'] ?>" placeholder="Genero" type="text" class="form-control" name="genero">
          </div>
        </div>

        
        <div class="form-group " > 
          <div class="col-sm-offset-2 col-sm-10 ">
            <button type="submit" class="btn btn-primary">Editar</button>

          </div>
        </div>

      </form>
    <?php 
      if($_POST){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $ano = $_POST['ano'];
        $genero = $_POST['genero'];
        $con = mysqli_connect('localhost','root','','proyectoagil');
        $query = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion',ano='$ano', genero = '$genero' WHERE id_producto = $id_producto";

        if($row = mysqli_query($con, $query)){
          echo "<script>
              alert('Datos Modificados');
              window.location.replace('index_admin2.html');
          </script>";
        }else{
          echo "No se pudo actualizar";
        }
      }

     ?>
  </div>

</body>
</html>