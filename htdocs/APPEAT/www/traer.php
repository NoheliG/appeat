<html>
    <head>
        <title>-</title>
        <link href="css/index.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <?php
//header("Content-type: text/css");
//echo "<link href=\"css/index.css\" rel=\"stylesheet\" type=\"text/css\" >"; 
        header('Content-Type: text/css');
        $host = "localhost";
        $usuario = "root";
        $pass = "";
        $bd = "adpeat";

        $servidor = mysql_connect($host, $usuario, $pass);

        mysql_set_charset("utf8", $servidor);
        $conexion = mysql_select_db($bd, $servidor);

        $consulta = "SELECT * FROM plato";
        $sql = mysql_query($consulta);

        $datos = array();

        $tabla = "<br/><table style='border:1px'>
                <thead>
                <tr>
                <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>ACCION</th>
                    <th>ACCION</th>
                </tr>
                </thead>
                <tbody>";
        $i = 1;
        while ($obj = mysql_fetch_object($sql)) {

            $tabla .= "<tr>
                                            <td>" . $i . "</td>
                        <td><a href='#' >" . $obj->nombre_plato . "</a></td>
                            <td><a href='eliminar.php?cod=$obj->id_plato' >Eliminar</a></td>"
                    . "<td>   <a href='#?cod=$obj->id_plato' >Actualiza</a></td>
                        
                    </tr>";
            $i++;
        }
        $tabla .= "</tbody></table>";
//echo '' . json_encode($datos) . '';
        echo $tabla;
        mysql_close($servidor);
//			header('Content-type: application/json');
//	
//					header("Access-Control-Allow-Origin: *");
        ?>
    </body>
</html>

