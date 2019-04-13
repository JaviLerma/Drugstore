<?php
    i = 1;
    echo "<table><tr><td>COL1</td><td>COL2</td>";
    while (i <= $qfilas->num_rows){
        echo "<table><tr><td>COL1</td><td>COL2</td>";  
    }

?>


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
					<td><input type="submit" name="nSubmit" id="idSubmit" value="Ingresar"></td>
				</tr>
</table>