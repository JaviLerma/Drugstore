<!DOCTYPE html>
	<head>
		<title>Login</title>
		<style type="text/css">
			header{
				font-size: 50px;
				font-family: "Lucida Console";
				color:#0042FF;
				font-style: italic;
			}
			
		</style>
	</head>
	
	<body>
		<header>Iniciar Sesion</header>
		<form action="login.php" method="GET">
			<table>
				<tr>
					<td>Usuario</td>
					<td><input type="text" id="idUsuario" name="nUsuario" required value="Ingrese usuario" onclick="this.value='';" onblur="this.value=(this.value=='')?'Ingrese usuario':this.value;"></td>
					<!--<input type="text" id="idUser" name="nUser" value="Usuario" onclick="this.value='';" onblur="this.value=(this.value=='')?'Usuario':this.value;"></td><td></td>-->
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="password" id="idContrasenia" name="nContrasenia" required value="****" onclick="this.value='';" onblur="this.value=(this.value=='')?'****':this.value;"></td>
					
				</tr>
				<tr>
					<td><input type="submit" name="nIngresar" id="idIngresar" value="Ingresar"></td>
				</tr>
			</table>
			<!--aca se puede ponder codigo php-->
		</form>

	</body>				
</html>
<?php
	if(isset($_GET["nIngresar"])){
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
				header("Location: http://localhost/Clase1/login.php?Err=1");
			}
		}
		else
		header("Location: http://localhost/Clase1/login.php?Err=1");
		$conexiondb->close();
	} 
	else
	if (isset($_GET["Err"])){
		$error = $_GET["Err"];
		if($error == 1){
			echo "<div style='color:red'>Usuario o contraseña invalido </div>";
		}
	}
?>





