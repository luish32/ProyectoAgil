<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestionar Empleado</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<h1 class="text-center">Gestion Empleado</h1>
	<hr>
	<a href="anadir_emp.php" class="btn btn-danger">Añadir<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
	<a href="index_admin.html" class="btn btn-danger">Volver<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

	<div class="col-md-offset-3 col-md-6 ">
	<table border="1px" class="table table-bordered">
		<tr>
			<td class="bg-danger">nombre <i class="fa fa-address-book"></i></td>
			<td class="danger">acciones <i class="fa fa-plus-circle"></i></td>
		</tr>
	<?php 
		$conexion = mysqli_connect('localhost', 'root', '', 'proyectoagil');
		$insertar = mysqli_query($conexion, "SELECT * FROM empleados");
		while ($row = mysqli_fetch_array($insertar)) {
			echo "
			<tr>
				<td>".$row['nombre']."</td>
				<td>
					<a href='consultar_emp.php?id=".$row['id']."'>Consultar</a>
					<a href='editar_emp.php?id=".$row['id']."'>Editar</a>
					<a href='eliminar_emp.php?id=".$row['id']."'>Eliminar</a>
				</td>
			<tr>";
		}
	 ?>
	</table>	
	</div>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>