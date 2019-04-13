<?php
    require 'conexionlogin.php';

    $sqlMarcas = "SELECT * FROM marcas";
    $resultadoQuery = $conexiondb->query($sqlMarcas);
    if ($resultadoQuery->num_rows > 0) {
        echo "<table border='1'>
        <tr>
            <td> columna 1 </td>
            <td> columna 2</td>
            <td> columna 3</td>
        </tr>";
        while($row = $resultadoQuery->fetch_assoc()) {
            echo "<tr>
                    <td> ".$row["id_marca"]." </td>
                    <td> ".$row["nombre_marca"]."</td>
                    <td> ".$row["habilitada"]."</td>
                </tr>";
        }
        echo "</table>";
    }
?>