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
			}
		</style>
	</head>
	
	<body>
		<header>Iniciar Sesion</header>
		<form action="main.php" method="GET">
			<table>
				<tr>
					<td>Usuario</td>
					<td><input type="text" id="idUsuario" name="nUsuario" required value="Ingrese usuario" onclick="this.value='';" onblur="this.value=(this.value=='')?'Ingrese usuario':this.value;"></td>
					<!--<input type="text" id="idUser" name="nUser" value="Usuario" onclick="this.value='';" onblur="this.value=(this.value=='')?'Usuario':this.value;"></td><td></td>-->
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="password" id="idPassword" name="nPassword" required value="****" onclick="this.value='';" onblur="this.value=(this.value=='')?'****':this.value;"></td>
					
				</tr>
				<tr>
					<td><input type="submit" name="nSubmit" id="idSubmit" value="Ingresar"></td>
				</tr>
			</table>
   		<?php
       		if(isset($_GET["login"]) && $_GET["login"] == 'false'){
          		echo "<div style='color:red'>Usuario o contraseña invalido </div>";
       		}
     	?>
		</form>
	</body>				
</html>