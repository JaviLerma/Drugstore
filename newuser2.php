<?php
	session_start();
	require 'conexionlogin.php';
	$nuevo_usuario = $_GET["nUsuario"];
	$contrasenia = $_GET["nContrasenia"];
	$usuarios_existentes = "Select U.usuario from usuarios ";
	$resultadoQuery = $conexiondb->query($usuarios_existentes);
	$fila = $resultadoQuery->fetch_assoc();
	if($nuevo_usuario == $fila[] ){
		echo "capo";
	}
	//echo "$usuario";

	
?>