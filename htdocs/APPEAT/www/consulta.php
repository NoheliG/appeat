<?php
    include('include/config.php');
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
    //mysqli_set_charset($conexion,"utf8");
    $peticion="select * from usuario";
    $resultado=mysqli_query($conexion,$peticion);


    echo '<table>';
        echo '<thead>';
        echo '<th>contacto</th>';
        echo '<th>descripcions</th>';
        echo '</thead>';
        while($fila = mysqli_fetch_array($resultado)){
            echo'<tbody>';
            echo '<tr>';
            echo '<td>'.$fila['contacto'].'</td>';
            echo '<td>'.$fila['descripcion'].'</td>';
            echo '</tbody>';
        }
        echo '</tr>';
        echo '</table';
?>