<?php 
	$con = mysqli_connect('localhost','root','','proyectoagil');

	$id_empleado = $_GET['id_empleado'];
	$del = mysqli_query($con, "DELETE FROM empleados WHERE id_empleado=$id_empleado");
	if($del){
	echo "<script>
	alert('Registro eliminado con exito...')
	window.location.replace('index_admin2.html');</script>";
	}else{
	echo "No se pudo eliminar";
}
 ?>
