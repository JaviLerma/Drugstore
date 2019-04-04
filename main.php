<?php	
	session_start();
	require 'conexionlogin.php';
	$usuario = $_GET["nUsuario"];
	$password = $_GET["nPassword"];
	$sql = "Select U.pass from Usuarios U Where U.usuario = '".$usuario."'";
	//$sql = "Select U.Contrasenia from Usuario U Where U.Nombre = 'admin'";
	$resultadoQuery = $conexiondb->query($sql);
	if($resultadoQuery->num_rows > 0){
		$fila = $resultadoQuery->fetch_assoc();
		if($password == $fila["pass"]){
			$_SESSION['logueado'] = true;
			$_SESSION['usuario'] = $usuario;
			header("Location: http://localhost/index.php");
		}else{
			//$_SESSION['logueado'] = false;
			header("Location: http://localhost/Clase1/login.php?login=false"); // ?login=false -> esto avisa del fallo
		}
	}
	else
	header("Location: http://localhost/Clase1/login.php?login=false");
	$conexiondb->close();
?>