<?php
    include('include/config.php');
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
    //mysqli_set_charset($conexion,"utf8");
    $peticion="select * from restaurante";
    $resultado=mysqli_query($conexion,$peticion);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Adomicilio Eat</title>
</head>

<body>

    <div class="menu">
        <a title="regresa" href="#"><img src="img/regresar.png" style="width: 32px; height: 32px;margin-left: 25px; margin-top: 13px;"/></a>
        <div id="titulo">
        <h1  align="center">REGISTRARSE</h1>
        </div>
    </div>

    <div class="dato">
        <form method="post"    style="width: 400px;">
            <label id="texto" for="fname">Nombre del Restaurante</label>
            <input id="inp" type="text" name="u" placeholder="" required="required" />
            <label id="texto" for="fclave">Contraseña</label>
            <input id="inp" type="password" name="p" placeholder="" required="required" />
            <label id="texto" for="fruc">N° RUC</label>
            <input id="inp" type="text" name="p" placeholder="" required="required" />
            <label id="texto" for="fcodigo">Codigo Postal</label><br>
            <select id="inp" style="width: 150px; ">
  <option value="codigo">COD</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
            <input id="inp" style ="width:200px;float:right" type="text" name="p" placeholder="Numero" required="required" /><br>

            <label id="texto" for="fcorreo">Correo</label>
            <input id="inp" type="text" name="correo" placeholder="" required="required" /> 
            <label style="font-size:14px;color:white" ><input type="checkbox" id="cbox1" value="first_checkbox"> Acepto Términos y Condiciones</label>       
        </form>
    </div>
    
    <div data-role="collapsible" data-theme="b" data-content-thme="b">
        <h3>consulta de datos</h3>
        <?php
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

        </div>

    <div class="footer">

        
        <div class="btn">

            <button id="aceptar2" type="button">ACEPTAR</button>
        </div>
    </div>

    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>