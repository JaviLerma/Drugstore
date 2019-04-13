<?php
    $idMarca = $_GET["nBtnIdMarca"];
    $sql = "SELECT * FROM Marcas M WHERE M.Id = ".$idMarca;
    $qsql = $conexiondb->query($sql);
    if ($qsql->num_rows > 0){
        $nombre = $_GET["nNombre"];
        $habilit = $_GET["nHabilit"];
    
    }


?>