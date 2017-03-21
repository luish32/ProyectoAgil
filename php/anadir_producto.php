<?php 	

	$con = mysqli_connect("localhost","root","","proyectoagil");

	if(mysqli_connect_errno()){

		echo "No se pudo conectar a la base de datos" . mysqli_connect_error();

	} 
	$nombre= mysqli_real_escape_string($con , $_POST["nombre"]);
	$descripcion= mysqli_real_escape_string($con , $_POST["descripcion"]);
	$ano= mysqli_real_escape_string($con , $_POST["ano"]);
	$genero= mysqli_real_escape_string($con , $_POST["genero"]);



	$sql= "INSERT INTO productos (nombre ,descripcion, ano, genero)
		VALUES ('$nombre', '$descripcion', '$ano', '$genero')";

	if(!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
	}else{
		echo "Adicion Realiza Con Exito";
	}



 ?>
 <a href="../index_admin2.html">Regresar</a>