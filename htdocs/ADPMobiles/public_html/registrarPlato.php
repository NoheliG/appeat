<!DOCTYPE html>
<html>
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/insertaPlato.js"></script>
        <title>Adomicilio Eat</title>
    </head>
    <body>
        <div class="menu">
            <a href="categoria.php"><img src="img/regresar.png" style="width: 32px; height: 32px;margin-left: 25px; margin-top: 13px;"/></a>
            <div id="titulo" style="margin-left: 50px; margin-bottom: 25px; POSITION: absolute; top: 25px;">
                <h1 style="font-size: 18px;font-weight: bold;" align="center">REGISTRAR PLATILLO</h1>
            </div>
        </div>
        <div class="dato" style="bottom: 0px; top: 0px;right: 0px; margin-top: 100px; left: 0px; margin-left: 5px;">
            <!--<input type="file" id="files" name="files[]" /><output id="list"></output>-->
            <div class="main">
                <form class="form" method="post" action="#" style="width: 400px; margin-top: 120px;">
                    <label id="texto">Nombre</label>
                    <input class="inp" id="nombre_plato" type="text" name="nombre_plato" required="required" />
                    <label id="texto">Desripci&oacute;n</label>
                    <input class="inp" id="descripcion_plato" type="text" name="descripcion_plato" required="required" />
                    <label id="texto">Precio</label> 
                    <input class="inp" id="precio_plato" type="number" name="precio_plato" required="required" />
                    <label id="texto">Stock</label><br/>
                    <input type="number" class="inp" id="stock_plato" name="stock_plato" required="required">               
                    <input type="button" name="aceptar" id="aceptar" value="ACEPTAR"/>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>