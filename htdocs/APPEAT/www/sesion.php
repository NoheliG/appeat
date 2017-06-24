<!DOCTYPE html>
<html>

    <head>

        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">   
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title>Adomicilio Eat</title>
    </head>

    <body>
        <div class="menu">
            <a title="regresa" href="index.html"><img src="img/regresar.png" style="width: 32px; height: 32px;margin-left: 25px; margin-top: 13px;"/></a>
            <div id="titulo">
                <h1 align="center">REGISTRARSE</h1>
            </div>
        </div>

        <div class="login">
            <form  class = "form" accion="#" method="post">
                <input class="inp" id="nombre_usuario" type="text" name="nombre_usuario" placeholder="Usuario" required="required"/>
                <p id="contenido"></p>
                <input class="inp" id="clave" type="password" name="clave" placeholder="Contrasena"required="required" /><br/>
                <a style="color:white; text-decoration:none;" href="#"><h3 style="margin-left: 15px;margin-top: 20px;">HAZ OLVIDADO LA CONTRASE&Ntilde;A?</h3></a>

                <input type="button" name="aceptar" id="aceptar" value="ACEPTAR"/>
            </form>

        </div>

        <div class="footer">
            <div class="btn">
                <a href="registrar3.php"><button id="registrar" style=" float: none; margin-bottom: 10px" type="button">REGISTRARSE</button></a>
            </div>
        </div>

        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </body>

</html>