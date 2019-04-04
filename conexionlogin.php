<?php
$conexiondb=new mysqli("localhost","root","","drugstore1");
	if($conexiondb->connect_error){
		die("Ocurrió un error al intentar conectar la db");
	}
	echo "Conexion exitosa";
?>
