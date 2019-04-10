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
		<header>Nuevo Usuario</header>
		<form action="newuser2.php" method="GET">
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
					<td>Nombre y Apellido</td>
					<td><input type="text" id="idNom_Ape" name="nNom_Ape" required value=""></td>
					<td><input type="submit" name="nSubmit" id="idSubmit" value="Crear"></td>
				</tr>
			</table>
		</form>
	</body>				
</html>