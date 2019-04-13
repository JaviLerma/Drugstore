<?php
    require('conexionlogin.php');
    $nombre = $_GET["nNombre_marca"];
    $sql = "INSERT INTO marcas(nombre, habilitada) VALUES ('".$nombre."',1)"; 
    $qMarca = $conexiondb->query($sql);
    if($qMarca)
        echo "Datos agregados correctamente";
    else
        echo "ERROR"; 

?>