<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<h1 class="text-center">Consultar Empleado</h1>
	<hr>
	<a href="gestion_empleado.php" class="btn btn-danger">Volver<i class="fa fa-arrow-left" aria-hidden="true"></i></a>
	<?php 
		if ($_GET) {
			$id_empleado = $_GET['id_empleado'];

			$conexion = mysqli_connect('localhost', 'root', '', 'proyectoagil');
			$insertar = mysqli_query($conexion, "SELECT * FROM empleados WHERE id_empleado=$id_empleado");
			$row = mysqli_fetch_array($insertar);
		}
	 ?>
	 <div class="col-md-offset-3 col-md-6 ">
	 <table border="1px" class="table table-bordered">
	 	<tr>
	 		<th  scope="row" class="danger">Nombre <i class="fa fa-pencil-square-o"></i></th>
	 		<td><?php echo $row['nombre'] ?></td>
	 	</tr>
	 	<tr>
	 		<th scope="row" class="danger">Telefono <i class="fa fa-phone"></i></th>
	 		<td><?php echo $row['telefono'] ?></td>
	 	</tr>
	 	<tr>
	 		<th scope="row" class="danger">Correo <i class="fa fa-envelope-o" ></i></th>
	 		<td><?php echo $row['correo'] ?></td>
	 	</tr>
	 	<tr>
	 	<th scope="row" class="danger">Documento <i class="fa fa-id-card-o"></i></th>
	 		<td><?php echo $row['documento'] ?></td>
	 	</tr>
	 	<tr>
	 	<th scope="row" class="danger">Numero Documento <i class="fa fa-plus-circle"></i></th>
	 		<td><?php echo $row['numerodoc'] ?></td>
	 	</tr>
	 	<tr>
	 	<th scope="row" class="danger">Sexo <i class="fa fa-venus-mars"></i></th>
	 		<td><?php echo $row['sexo'] ?></td>
	 	</tr>
	 </table>
	 </div>
</body>
</html>