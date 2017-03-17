<?php 
	$con = mysqli_connect('localhost','root','','proyectoagil');

	$id_producto = $_GET['id_producto'];
	$del = mysqli_query($con, "DELETE FROM productos WHERE id_producto=$id_producto");
	if($del){
	echo "<script>
	alert('Registro eliminado con exito...')
	window.location.replace('index_admin2.html');</script>";
	}else{
	echo "No se pudo eliminar";
}
 ?>
