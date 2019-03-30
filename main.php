<?php	
	session_start();
	require 'conexionlogin.php';
	$usuario = $_GET["nUsuario"];
	$password = $_GET["nPassword"];
	$sql = "Select U.Contrasenia from Usuario U Where U.Nombre = '".$usuario."'";
	//$sql = "Select U.Contrasenia from Usuario U Where U.Nombre = 'admin'";
	$resultadoQuery = $conexiondb->query($sql);
	
	if($resultadoQuery->num_rows > 0){
		$fila = $resultadoQuery->fetch_assoc();
		if($password == $fila["Contrasenia"]){
			$_SESSION['logueado'] = true;
			$_SESSION['usuario'] = $usuario;
			header("Location: http://localhost/index.php");
		}else{
			header("Location: http://localhost/Clase1/login.php"); // echo "Datos inválidos";
		}
	}
	else
	header("Location: http://localhost/Clase1/login.php"); // echo "Datos inválidos";
	$conexiondb->close();
?>