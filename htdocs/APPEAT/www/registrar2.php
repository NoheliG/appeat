<!DOCTYPE html>
<html lang="es">

<head>

    <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *;script-src 'self' http://onlineerp.solution.quebec 'unsafe-inline' 'unsafe-eval'; ">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Adomicilio Eat</title>

</head>

<body>

    <div class="menu">
        <a title="regresa" href="http://localhost/hello/www/login.html"><img src="img/regresar.png" style="width: 32px; height: 32px;margin-left: 25px; margin-top: 13px;"/></a>
        <div id="titulo">
            <h1 align="center">REGISTRARSE</h1>
        </div>
    </div>

    <div class="dato">
        <form method="post" style="width: 400px;">
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
            <input id="inp" style="width:200px;float:right" type="text" name="p" placeholder="Numero" required="required" /><br>
            <label id="texto" for="fcorreo">Correo</label>
            <input id="inp" type="text" name="correo" placeholder="" required="required" />
            <label style="font-size:14px;color:white"><input type="checkbox" id="cbox1" value="first_checkbox"> Acepto Términos y Condiciones</label>
        </form>
    </div>



    <div class="footer">
       
        <div class="">
            <h1>Traer datos de BD con JSON</h1>
            <hr>
            <br>
            <button type="button" onclick="leer()">Request datas</button>
            <div id="mydiv"></div>


        </div>

        <div class="btn">

            <button id="aceptar2" type="button">ACEPTAR</button>
        </div>
    </div>
    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/dato2.js"></script>
</body>

</html>