<?php 
	$con = mysqli_connect('localhost','root','','proyectoagil');

	$id = $_GET['id'];
	$del = mysqli_query($con, "DELETE FROM empleados WHERE id=$id");
	if($del){
	echo "<script>
	alert('Registro eliminado con exito...')
	window.location.replace('gestion_empleado.php');</script>";
	}else{
	echo "No se pudo eliminar";
}
 ?>
