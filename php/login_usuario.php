<?php
	include 'DBconexion.php';

	$correo = $_POST['correo']; 
	$contrasena = $_POST['contrasena'];

	$validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contrasena'");

	if(mysqli_num_rows($validar_login) > 0){

		header("location: ../principal.php");
		exit;
	}else{
		echo'
		<script>
			alert("El usuario no existe, verifica los datos ingresados");
				window.location = "../index.php";
		</script>
		';
		exit;
	}





?>