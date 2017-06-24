<!DOCTYPE html>
<html>
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script type="text/javascript" src="js/insertaRest.js"></script>
        <title>Adomicilio Eat</title>
    </head>
    <body>
        <div class="menu">
            <a title="regresa" href="index.html"><img src="img/regresar.png" style="width: 32px; height: 32px;margin-left: 25px; margin-top: 13px;"/></a>
            <div id="titulo">
                <h1 align="center">REGISTRARSE</h1>
            </div>
        </div>
        <div class="dato">
            <div class="main">
                <form class="form" style="width: 400px;" action="#" method="post">
                    <label id="texto" >Nombre del Restaurante</label>
                    <input class="inp" type="text" id="nombre_restaurante" name="nombre_restaurante" required="required" />
                    <label id="texto" >N° RUC</label>
                    <input class="inp" type="number" id="ruc" name="ruc"  maxlength="11" required="required" />
                    <label id="texto" >Telefono</label><br>
                    <input class="inp" type="number" id="telefono" name="telefono"  maxlength="9" required="required" /><br>
                    <label id="texto">Correo</label>
                    <input class="inp" type="text"   id="correo_restaurante" name="correo_restaurante" required="required" />
                    <label id="texto">Usuario</label>
                    <input class="inp" type="text" id="nombre_usuario" name="nombre_usuario" required="required" />
                    <label id="texto" >Contrase&ntilde;a</label>
                    <input class="inp" type="password" id="clave" name="clave" required="required" />
                    <input type="button" id="guardar2" value="GUARDAR"/>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>