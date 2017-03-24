<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
<h1 class="text-center">Editar Empleado</h1>
<hr>
	<?php 
		if ($_GET) {
			$id_empleado = $_GET['id_empleado'];
			$conexion = mysqli_connect('localhost', 'root', '', 'proyectoagil');
			$insertar = mysqli_query($conexion, "SELECT * FROM empleados WHERE id_empleado=$id_empleado");
			$row = mysqli_fetch_array($insertar);
		}
	 ?>
	 <a href="gestion_empleado.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>Volver</a>
	 <div class="col-md-offset-3 col-md-A">
		<form method="POST">
		Nombre
		<input type="text" class="form-control" placeholder="Nombre Completo*" name="nombre" required="" value="<?php echo $row['nombre'] ?>"><br><br>
		Telefono
		<input type="text" class="form-control" placeholder="Tel / Cel*" name="telefono" required="" value="<?php echo $row['telefono'] ?>"><br><br>
		Correo
		<input type="email" class="form-control" placeholder="Correo Electrónico*" name="correo" required="" value="<?php echo $row['correo'] ?>"><br><br>
		Documento de Identidad
		<select class="form-control" data-live-search="true" name="documento">
			<option <?php if ($row['documento']== 'cedula') {echo "select";} ?> value="cedula">Cedula de ciudadanía</option>
			<option <?php if ($row['documento']== 'passport') {echo "select";} ?>  value="passport">Pasaporte</option>
			<option <?php if ($row['documento']== 'cedulaextrangera
			') {echo "select";} ?>  value="cedulaextrangera
			">Cedula de Extrangería</option>
		</select><br><br>
		Numero Doc
		<input type="number" class="form-control" placeholder="Documento" name="numerodoc" required="" value="<?php echo $row['numerodoc'] ?>"><br><br>
		Sexo
		<select class="form-control" data-live-search="true" name="sexo">
			<option <?php if ($row['sexo']== 'masculino') {echo "select";} ?> value="masculino">Masculino</option>
			<option <?php if ($row['sexo']== 'femenino') {echo "select";} ?> value="femenino">Femenino</option>
			<option <?php if ($row['sexo']== 'noIdentificado') {echo "select";} ?> value="noIdentificado">Sin Identificar</option>
		</select><br><br>
		<input type="submit" class="btn btn-danger" value="Modificar">
	</form>
	<div>
		
	</div>
	<?php 
	if ($_POST) {
	 	$nombre = $_POST['nombre'];
	 	$telefono = $_POST['telefono'];
	 	$correo = $_POST['correo'];
	 	$documento = $_POST['documento'];
	 	$numerodoc = $_POST['numerodoc'];
	 	$sexo = $_POST['sexo'];

	 	if($nombre !="" && $telefono !="" && $correo !="" && $documento !="" && $numerodoc !="" && $sexo !="");
	 		$conexion = mysqli_connect('localhost', 'root', '', 'proyectoagil');
	 		$insertar = "UPDATE gestionempleado SET nombre='$nombre', telefono='$telefono', correo='$correo', documento='$documento', numerodoc='$numerodoc', sexo='$sexo' WHERE id_empleado=$id_empleado";
	 		$row = mysqli_query($conexion,$insertar);
	 		if ($row) {
	 			echo "
	 			<script>
				alert('Modificado con exitos');
				window.location.replace(index_admin2.html);
	 			</script>";
	 		}else{
	 			echo "
	 			<script>
				alert('no hay conexion');
	 			</script>";
	 		}
	 } ?>
</body>
</html>