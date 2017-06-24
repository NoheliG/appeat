<?php
    include('include/config.php');
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
    //mysqli_set_charset($conexion,"utf8");
    $peticion="select * from restaurante";
    $resultado=mysqli_query($conexion,$peticion);


    echo '<table>';
        echo '<thead>';
        echo '<th>nombre</th>';
        echo '<th>descripcion</th>';
        echo '</thead>';
        while($fila = mysqli_fetch_array($resultado)){
            echo'<tbody>';
            echo '<tr>';
            echo '<td>'.$fila['nombre_restaurante'].'</td>';
            echo '<td>'.$fila['descrip_restaurante'].'</td>';
            echo '</tbody>';
        }
        echo '</tr>';
        echo '</table';
?>