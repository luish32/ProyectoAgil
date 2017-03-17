<?php 
	session_start();
	if($_POST){
	$con = mysqli_connect('localhost','root','','proyectoagil');
	if(mysqli_connect_errno()){
	echo "No se pudo conectar a la BD".mysqli_error();
	}
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	  $sql = "SELECT nombres, apellidos FROM registro WHERE correo = '$correo' AND contrasena = '$contrasena'";
	$query = mysqli_query($con, $sql);
	  if(mysqli_num_rows($query) > 0){
	  $row = mysqli_fetch_array($query);
	  $_SESSION['nombres'] = $row['nombres']." ".$row['apellidos'];
	  header("location: carritoBD/index.php"); 
	  }else {
	  echo "<script>
	  alert('Email o Contraseña Incorrectos');
	  </script>";
	  }
	  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Bienvenido por favor ingrese.</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="correo" placeholder="Correo electronico" required="" autofocus="" />
			  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Ingresar" type="Submit">Ingresar</button>  			
		</form>			
	</div>
</div>
</body>
</html>