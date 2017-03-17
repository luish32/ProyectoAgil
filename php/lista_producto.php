<?php
	$mysqli=new mysqli("localhost","root","","proyectoagil"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
	$query="SELECT *  FROM productos";

	$resultado=$mysqli->query($query);

	
?>
<html>
	<head>
	</style>
	</head>
	<body>
	<div id="cuadro">
		<h1>Registros</h1>
		
		<section id="caja1">
	<div class="col-sm-14 ">
	<table border="1px" class="table table-bordered">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/master.css">
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Descripcion</td>
					<td>Año</td>
					<td>Genero</td>

				</tr>

					<tr>
						<?php while($row=$resultado->fetch_assoc()){ ?>
						<td><?php echo $row['id_producto'];?></td>

						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['descripcion'];?></td>
						<td><?php echo $row['ano'];?></td>
						<td><?php echo $row['genero'];?></td>



					</tr>

						
					<?php } ?>
			</table>	
			<a class="btn btn-primary" href="../consultar_producto.html">Regresar</a>
		</body>
	</html>	

   


