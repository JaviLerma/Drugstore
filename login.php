<html>
	<head>
		<title>Login</title>
	</head>
	
	<body>
		<form action="main.php" method="GET">
			<table>
				<tr>
					<td> Usuario </td>
					<td><input type="text" id="idUser" name="nUser"></td><td></td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="password" id="idPassword" name="nPassword" required></td>
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