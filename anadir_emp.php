<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Añadir</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<h1 class="text-center">Añadir Empledo</h1>
	<hr>
	<a href="gestion_empleado.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>Volver</a>
	
	<div class="col-md-offset-3 col-md-6">
		<form method="POST">
		Nombre <i class="fa fa-pencil-square"></i>
		<input type="text" class="form-control" placeholder="Nombre Completo*" name="nombre" required=""  ><br><br>
		Telefono<i class="fa fa-phone"></i>
		<input type="text" class="form-control" placeholder="Tel / Cel*" name="telefono" required=""><br><br>
		Correo <i class="fa fa-at"></i>
		<input type="email"class="form-control" placeholder="Correo Electrónico*" name="correo" required=""><br><br>
		Documento de Identidad <i class="fa fa-address-card"></i>
		<select class="form-control" data-live-search="true" name="documento">
			<option data-tokens="ketchup mustard" value="cedula">Cedula de ciudadanía</option>
			<option data-tokens="mustard" value="passport">Pasaporte</option>
			<option data-tokens="frosting" value="cedulaextrangera">Cedula de Extrangería</option>
		</select><br><br>
		Numero Doc <i class="fa fa-plus-circle"></i>
		<input type="number" class="form-control" placeholder="Documento" name="numerodoc" required=""><br><br>
		Sexo <i class="fa fa-venus-mars"></i>
		<select class="form-control" data-live-search="true" name="sexo">
			<option value="masculino">Masculino</option>
			<option value="femenino">Femenino</option>
			<option value="noIdentificado">Sin Identificar</option>
		</select><br><br>
		<input class="btn btn-danger" type="submit" value="Enviar">
		<input class="btn btn-danger" type="reset" value="Borrar">
	</form>
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
	 		$insertar = "INSERT INTO empleados VALUES ('', '$nombre', '$telefono', '$correo', '$documento', '$numerodoc', '$sexo')";
	 		$row = mysqli_query($conexion,$insertar);
	 		if ($row) {
	 			echo "
	 			<script>
				alert('exito');
				window.location.replace(gestion_empleado.php);
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