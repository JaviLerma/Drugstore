<?php	
	session_start();
	require 'conexionlogin.php';
	$usuario = $_GET["nUsuario"];
	$contrasenia = $_GET["nContrasenia"];
	$sql = "SELECT U.contrasenia FROM usuarios U Where U.usuario = '".$usuario."'";
	$resultadoQuery = $conexiondb->query($sql);
	if($resultadoQuery->num_rows > 0){
		$fila = $resultadoQuery->fetch_assoc();
		if($contrasenia == $fila["contrasenia"]){
			//$_SESSION['logueado'] = true;
			$_SESSION['usuario'] = $usuario;
			header("Location: http://localhost/Clase1/main.php");
		}else{
			//$_SESSION['logueado'] = false;
			header("Location: http://localhost/Clase1/login.php?login=false"); // ?login=false -> esto avisa del fallo
		}
	}
	else
	header("Location: http://localhost/Clase1/login.php?login=false");
	$conexiondb->close();
?>