<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar Pelicula</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/master.css">

</head>
<body>
<h1 class="titulo1">Resultado</h1>
<section id="caja1">
	<div class="col-sm-12 ">
	<table border="1px" class="table table-bordered">
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Descripcion</td>
					<td>Año</td>
					<td>Genero</td>
					<td>Acciones</td>
	

				</tr>

<?php 
			$tac = mysqli_connect("localhost","root","","proyectoagil");
			$id_producto = $_POST["id_producto"];

			$query = mysqli_query($tac, "SELECT * FROM productos WHERE id_producto = $id_producto");
			
			
		while ($row = mysqli_fetch_array($query)) {
				echo '<tr>
						<td>'.$row["id_producto"].'</td>
						<td>'.$row["nombre"].'</td>
						<td>'.$row["descripcion"].'</td>
						<td>'.$row["ano"].'</td>
						<td>'.$row["genero"].'</td>

						<td><a class="btn btn-primary" href="../editar_producto.php?id_producto='.$row['id_producto'].'">Editar</a>
						<a  class="btn btn-danger" href="../eliminar_producto.php?id_producto='.$row['id_producto'].'">Eliminar</a>
					 </tr>';

			} ?>	
			
		?> 
		
</table>
<br>
<a  class="btn btn-primary" href="../index_admin2.html">Regresar</a>

</div>	
</section>	



 
</body>
</html>