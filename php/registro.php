<?php 	

	$con = mysqli_connect("localhost","root","","ProyectoAgil");

	if(mysqli_connect_errno()){

		echo "No se pudo conectar a la base de datos" . mysqli_connect_error();

	} 
	$nombres= mysqli_real_escape_string($con , $_POST["nombres"]);
	$apellidos= mysqli_real_escape_string($con , $_POST["apellidos"]);
	$documento= mysqli_real_escape_string($con , $_POST["documento"]);
	$telefono= mysqli_real_escape_string($con , $_POST["telefono"]);
	$correo= mysqli_real_escape_string($con , $_POST["correo"]);
	$contrasena= mysqli_real_escape_string($con , $_POST["contrasena"]);



	$sql= "INSERT INTO registro (nombres ,apellidos, documento, telefono, correo, contrasena)
		VALUES ('$nombres', '$apellidos', '$documento', '$telefono', '$correo', '$contrasena')";

	if(!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
	}else{
		echo "Registro Realizado Con Exito";
	}



 ?>
 <a href="../index_admin2.html">Regresar</a>