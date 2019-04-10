<?php
	session_start();
	require 'conexionlogin.php';
	$usuario = $_GET["nUsuario"];
	$contrasenia = $_GET["nContrasenia"];
	$nombre_apellido = $_GET["nNom_Ape"];
	$nuevo_usuario = "SELECT U.usuario FROM usuarios U WHERE U.usuario = '".$usuario."'";
	$resultadoQuery = $conexiondb->query($nuevo_usuario);
	if($resultadoQuery->num_rows > 0){
		echo "usuario existente";
	} else {
		$sql = "INSERT INTO usuarios(nombre_apellido, usuario, contrasenia) VALUES ('".$nombre_apellido."', '".$usuario."', '".$contrasenia."')";
		if($conexiondb->query($sql) === TRUE){
			echo "Usuario Creado exitosamente";
		}
	}
	$conexiondb->close();
?>

//como resetear el ID de la tabla para q empiece de 1 ??